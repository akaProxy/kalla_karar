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
            slides.parrent = {all: document.getElementById('slider-info'),images:document.getElementById('slider-images')}
            slides.parrent.texts = slides.parrent.all.getElementsByClassName('texts')[0];
            var images = slides.parrent.images.children;
            var texts = slides.parrent.texts.children;
            
            for(var i=0;i<images.length || i<texts.length;i++){
                images[i].classList.remove('relative');
                images[i].sliderIndex = i;
                texts[i].classList.remove('vissible');
                
                if(images[i].classList.contains('active')){
                    if(slides.active===null)slides.active = i,texts[i].classList.add('vissible');
                    else images[i].classList.remove('active');
                }
                
                slides.push({image:images[i],text:texts[i]});
                if(i>=images.length || i>=texts.length){
                    if(i>=images.length)images[i].style.display = 'none';
                    if(i>=texts.length)texts[i].style.display = 'none';
                    console.warn('images and texts does not match. Removes overflow');
                }
            }
            if(!slides.active)slides.active = 0;
            slides.parrent.images.style.height = slides[slides.active].image.getBoundingClientRect().height + 'px';
            
            console.log('I\'m running');
        });
    };
    var getActive = function(){return slides.parrent.images.getElementsByClassName('active')[0].sliderIndex};
    var goTo = function(pos, direction,startHere){
        var prev = getActive();
        var main = function(){
            if(!slides[pos])throw new Error('Slide not existing');
            slides[prev].image.classList.remove('active');
            slides[pos].image.classList.add('active');
            //Change size of container
            slides.parrent.images.style.height = slides[pos].image.getBoundingClientRect().height + 'px';
            
            //texts-stuff
            slides[prev].text.style[transformName] = 'translate('+(direction == 1 ? '-':'')+'150%, 0)';
            slides[pos].text.style[transformName] = 'translate(0, 0)';
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
            slides[pos].text.style[transformName] = 'translate('+(direction == 1 ? '':'-')+'150%, 0)';
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
    
    return {init:init, goTo:goTo, next:next, prev:prev};
}();
window.onload=SLIDER.init;