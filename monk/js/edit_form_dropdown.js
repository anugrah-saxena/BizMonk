function atcheck(element){
	
	
	if(element.checked)
	element.parentNode.className='click';
	else
	element.parentNode.className='inner';
	
}


function atdetail(element){

   var onclick;
  	
	
		if(element.name==1)
	{
		  onclick = element.nextSibling.nextSibling.getAttribute("onclick");
		  
		  
		  $(element).parent().next().children(".edit_form").hide();
		  $(element).parent().next().children(".detail").show();
  
		
		  $(element).next().attr({  value: 'Edit' });
	  
	  
		  if(typeof(onclick) == "function")
		  element.nextSibling.nextSibling.onclick = function  onclick(){edit_form(element.nextSibling.nextSibling); };
	  	  else
		  $(element).next().attr({  onclick: 'edit_form(this)' });
			  
	}
		
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



function edit_form(element){
	
	var onclick = element.previousSibling.previousSibling.getAttribute("onclick");	
	
	$(element).prev().attr({ src: 'images/aro1.png' });
		
	 if(typeof(onclick) == "function")
	element.previousSibling.previousSibling.onclick = function  onclick(){atdetail(element.previousSibling.previousSibling); };
    else
	$(element).prev().attr({ onclick: 'atdetail(this)'});
	
	
	$(element).parent().next().children(".edit_form").show();
	$(element).parent().next().children(".detail").hide();
	
	onclick = element.getAttribute("onclick");
		
	$(element).attr({ value: 'Cancel'});
	
	
	if(typeof(onclick) == "function")
     element.onclick = function  onclick(){cancel_form(element); };
     else
     $(element).attr({ onclick: 'cancel_form(this)'});
	
		$(element).parent().next().slideDown();

	
		
}

function cancel_form(element){
	
	var onclick = element.getAttribute("onclick");
		
	$(element).attr({value: 'Edit'	});
		
	
	if(typeof(onclick) == "function")
     element.onclick = function  onclick(){edit_form(element); };
     else
	$(element).attr({ onclick: 'edit_form(this)'	});
	
	$(element).parent().next().slideUp();
	
}

// JavaScript Document
// <object data="edit_this.php?p_id=<?php echo $p_id; ?>" ></object>