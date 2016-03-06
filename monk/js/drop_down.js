function atcheck(element){
	
	
	if(element.checked)
	element.parentNode.className='click';
	else
	element.parentNode.className='inner';
	
}


function atdetail(element){

    var onclick;

    onclick = element.getAttribute("onclick");

	$(element).attr({ src: 'images/rearo.png' });

    if(typeof(onclick) == "function")
	element.onclick = function  onclick(){nodetail(element); };
    else
	$(element).attr({onclick: 'nodetail(this)'});
	
	$(element).parent().next().slideDown();


}



function nodetail(element){
	
    var onclick = element.getAttribute("onclick");  
	
	$(element).attr({ src: 'images/aro1.png' });
	
    if(typeof(onclick) == "function")
	element.onclick = function  onclick(){atdetail(element); };
    else
	$(element).attr({ onclick: 'atdetail(this)'	});
		
	$(element).parent().next().slideUp();
	
}



