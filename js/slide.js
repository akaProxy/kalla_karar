var SLIDER = function(){
    window.requestAnimationFrame = window.requestAnimationFrame       ||
                                   window.webkitRequestAnimationFrame ||
                                   window.mozRequestAnimationFrame    ||
                                   function( callback ){window.setTimeout(callback, 1000 / 60)};
    var slides,
        transformName = 'transform';
    //Finds the relevant items and corrects classes and putts it all in an array
    var init = function(){
        requestAnimationFrame(function(){
            slides = [];
            slides.active = null;
            slides.parent = {all: document.getElementById('slide'),
                              images:document.getElementById('slider-images'),
                              texts:document.getElementById('slider-info').getElementsByClassName('texts')[0]};
            var images = slides.parent.images.children;
            var texts = slides.parent.texts.children;
            
            for(var i=0;i<images.length || i<texts.length;i++){
                if(i>=images.length || i>=texts.length){
                    if(i>=images.length)texts[i].style.display = 'none';
                    if(i>=texts.length)images[i].style.display = 'none';
                    console.warn('images and texts does not match. Removes overflow');
                    break;
                }
                
                images[i].classList.remove('relative');
                images[i].sliderIndex = i;
                texts[i].classList.remove('vissible');
                //texts[i].style[transformName] = 'translate(0%, 0)';
                TweenLite.to(texts[i], 0, {xPercent:0});
                
                if(images[i].classList.contains('active')){
                    if(slides.active===null)slides.active = i,texts[i].classList.add('vissible');
                    else images[i].classList.remove('active');
                }
                
                slides.push({image:images[i],text:texts[i]});
            }
            if(!slides.active)slides.active = 0;
            slides.parent.images.style.height = slides[slides.active].image.getBoundingClientRect().height + 'px';
            
            if('ontouchstart' in window)enableTouch(slides.parent.all);
            window.addEventListener('keydown',function(e){
                switch(e.keyCode){
                    case 37:
                        prev();
                        break;
                    case 39:
                        next();
                        break;
                }
            },true);
            
            console.log('I\'m running');
        });
    };
    var getActive = function(){return slides.parent.images.getElementsByClassName('active')[0].sliderIndex};
    var place = function(pos, direction, val){
        //slides[pos].text.style[transformName] = 'translate('+(direction == 1 ? '':'-')+(val||150)+'%, 0)';
        val=(val||150)*(direction == 1 ? 1:-1);
        TweenLite.to(slides[pos].text, 0, {xPercent:val});
    };
    var goTo = function(pos, direction,startHere){
        var prev = getActive();
        var main = function(){
            if(!slides[pos])throw new Error('Slide not existing');
            slides[prev].image.classList.remove('active');
            slides[pos].image.classList.add('active');
            //Change size of container
            slides.parent.images.style.height = slides[pos].image.getBoundingClientRect().height + 'px';
            
            //texts-stuff
            //slides[prev].text.style[transformName] = 'translate('+(direction == 1 ? '-':'')+'150%, 0)';
            TweenLite.to(slides[prev].text, 1, {xPercent:150*(direction == 1 ? -1:1)});
            //slides[pos].text.style[transformName] = 'translate(0%, 0)';
            TweenLite.to(slides[pos].text, 1, {xPercent:0});
            
        };
        var makeVissible = function(){
            slides[pos].text.classList.add('vissible');
            requestAnimationFrame(main);
        };
        if(startHere){
            requestAnimationFrame(makeVissible);
            return
        }
        
        slides[pos].text.classList.remove('vissible');
        requestAnimationFrame(function(){
            place(pos,direction);
            requestAnimationFrame(makeVissible);
        });
    };
    var next = function(){
        var pos=getActive()+1;
        if(pos>=slides.length)pos=0;
        goTo(pos,1);
    };
    var prev = function(){
        var pos=getActive()-1;
        if(pos<0)pos=slides.length-1;
        goTo(pos,0);
    };
    
    //Hej och hoj!
    var enableTouch = function(container){
        var startX,
            startY,
            start,
            timeThreshold = 0.8, //pixels per milisec
            lengthThreshold = 0.4, //length relative to screenwidth
            ratio = 3, //length/height
            elmntPos = [];

        container.addEventListener('touchstart', function(e){
            startX = e.changedTouches[0].pageX;
            startY = e.changedTouches[0].pageY;
            start = e.timeStamp;
            
            elmntPos = [];
            for(var i=-1,j=getActive()-2;i<=1;i++){
                if(++j>=slides.length)j=0;
                else if(j<0)j=slides.length-1;
                elmntPos.push(j);
                if(i)place(j,i);
            }
            /*stuff(-150);
            place(i,0);
            stuff(0);
            stuff(150);
            place(i,1);*/
            
                //var match = new RegExp('translate\\(((?:-|)\\d+)%,').exec(slides[i].text.style[transformName]);
                //elmntPos.push({pos:parseInt((match[1]))});
            console.log(elmntPos);
        }, false);

        container.addEventListener('touchmove',function(e){
            //THIS NEEDS TO BE DONE WITH JS-ANIMATIONS
            var x = 150*(e.changedTouches[0].pageX-startX)/window.innerWidth;
            TweenLite.to(slides[elmntPos[1]].text, 1, {xPercent:x});
            /*place(elmntPos[0],1,x-150);
            place(elmntPos[1],1,x);
            place(elmntPos[2],1,150-x);*/
            console.log('WE MOVAED!');
        },false);

        container.addEventListener('touchend', function(e){
            var x = e.changedTouches[0].pageX-startX,
                y = e.changedTouches[0].pageY-startY,
                time = (e.timeStamp-start);

            if(((Math.abs(x)/time)>timeThreshold /*|| (Math.abs(x)-window.innerWidth*lengthThreshold)>0*/) && Math.abs(x/y)>ratio){
                if(x<0)next();
                else prev();
            }else{
                TweenLite.to(slides[elmntPos[1]].text, 1, {xPercent:0});
            }
        }, false);
    }
    
    return {init:init, goTo:goTo, next:next, prev:prev};
}();
window.onload=SLIDER.init;