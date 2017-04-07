var Imgcpn = React.createClass({
    clickHandler : function(){
        if(!this.props.data.isCenter){
            this.props.center();
        }else{
            this.props.inverse();
        }
    },
    render : function(){
        var styleImg = {
            left : this.props.data.pos.x,
            top : this.props.data.pos.y,
            transform : "rotate(" + this.props.data.rotate + "deg)"
        };
        if(this.props.data.isInverse){
            styleImg.transform = "rotateY(180deg)";
        }
        return(
            <figure className='img-cpn' style={styleImg} onClick={this.clickHandler}>
                <img src={"assets/images/image1/" + this.props.info.fileName}/>
                <figcaption>
                    <h2>{this.props.info.title}</h2>
                    <div>{this.props.info.desc}</div>
                </figcaption>
            </figure>
        );
    }
});
var Navcpn = React.createClass({
    clickHandler : function(){
        if(!this.props.data.isCenter){
            this.props.center();
        }else{
            this.props.inverse();
        }
    },
    render : function(){
        var navcpn = "nav-cpn";
        if(this.props.data.isCenter){
            navcpn += " is-center"
        };
        if(this.props.data.isInverse){
            navcpn += " is-inverse"
        }

        return(
            <span className={navcpn} onClick={this.clickHandler}></span>
        )
    }
});
var Photocpn = React.createClass({
    getInitialState:function(){
        return {
            imgInfoArr : [{
                pos : {
                    x : 0,
                    y : 0
                },
                rotate : 0,
                isCenter : false,
                isInverse : false
            }]
        }
    },
    extend : {
        centerPos : {
            x : 0,
            y : 0
        },
        xLeftMin : 0,
        xLeftMax : 0,
        xRightMin : 0,
        xRightMax : 0,
        yMin : 0,
        yMax : 0
    },
    componentDidMount : function(){
        var stageDom = this.refs.stage,
            stageDomWidth = stageDom.offsetWidth,
            hstageDomWidth = stageDomWidth/2,
            stageDomHeight = stageDom.offsetHeight,
            hstageDomHeight = stageDomHeight/2;
        var imgDom = ReactDOM.findDOMNode(this.refs.img),
            imgDomWidth = imgDom.offsetWidth,
            himgDomWidth = imgDomWidth/2,
            imgDomHeight = imgDom.offsetHeight,
            himgDomHeight = imgDomHeight/2;
        this.extend = {
            centerPos : {
                x : hstageDomWidth-himgDomWidth,
                y : hstageDomHeight-himgDomHeight
            },
            xLeftMin : -himgDomWidth,
            xLeftMax : hstageDomWidth-himgDomWidth*3,
            xRightMin : hstageDomWidth+himgDomWidth,
            xRightMax : stageDomWidth-himgDomWidth,
            yMin : -himgDomHeight,
            yMax : stageDomHeight-himgDomHeight
        }
        this.rearrange(0);
    },
    rearrange : function(centerIdx){
        var imgInfoArr = this.state.imgInfoArr;
        for(var i=0;i<imgInfoArr.length;i++){
            if(i<imgInfoArr.length/2){
                imgInfoArr[i].pos = {
                    x : random(this.extend.xLeftMin,this.extend.xLeftMax),
                    y : random(this.extend.yMin,this.extend.yMax)
                }
            }else{
                imgInfoArr[i].pos = {
                    x : random(this.extend.xRightMin,this.extend.xRightMax),
                    y : random(this.extend.yMin,this.extend.yMax)
                }
            }
            imgInfoArr[i].rotate = random(-30,30);
            imgInfoArr[i].isCenter = false;
            imgInfoArr[i].isInverse = false;
            imgInfoArr[centerIdx].pos = {
                x :this.extend.centerPos.x,
                y : this.extend.centerPos.y
            }
            imgInfoArr[centerIdx].rotate = 0;
            imgInfoArr[centerIdx].isCenter = true;
        }
        this.setState({
            imgInfoArr : imgInfoArr
        });
        //console.log(imgInfoArr)
    },
    center : function(centerIdx){
        return function(idx){
            this.rearrange(idx);
        }.bind(this,centerIdx);
    },
    inverse : function(idx){
        return function(idxs){
            this.state.imgInfoArr[idxs].isInverse = !this.state.imgInfoArr[idxs].isInverse;
            this.setState({
                imgInfoArr : this.state.imgInfoArr
            });
        }.bind(this,idx)
    },
    render : function(){
        var imgArr = [];
        var navArr = [];
        imgDatas.forEach(function(value,index,itself){
            if(!this.state.imgInfoArr[index]){
                this.state.imgInfoArr[index] = {
                    pos : {
                        x : 0,
                        y : 0
                    },
                    rotate : 0,
                    isCenter : false,
                    isInverse : false
                }
            }
            imgArr.push(<Imgcpn key={index} info={imgDatas[index]} ref='img'
                data={this.state.imgInfoArr[index]} center={this.center(index)}
                inverse={this.inverse(index)}/>);
            navArr.push(<Navcpn key={index} data={this.state.imgInfoArr[index]}
                                center={this.center(index)} inverse={this.inverse(index)}/>)
        }.bind(this));
        return(
            <section className="stage" ref='stage'>
                <section>
                    {imgArr}
                </section>
                <section className='nav1'>
                    {navArr}
                </section>
            </section>
        )
    }
});
ReactDOM.render(
    <Photocpn/>,
    document.getElementById('photowall')
);
function random(low,high){
    return Math.ceil(Math.random()*(high-low)+low);
};
