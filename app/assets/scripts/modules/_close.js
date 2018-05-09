var targetButton = document.querySelector('.close'),
targetParentDiv = document.querySelector('.success-parent');
targetParentChild =document.querySelector('.success');

if(targetButton){
  
  targetButton.addEventListener('click', closeButton);

  function closeButton(){
    
    if(targetParentChild.classList[1] == null){
      targetParentChild.classList.add('hide');
    }else if( targetParentChild.classList[1] ){
      targetParentChild.classList.remove('hide');
    }

    function close(){
      targetParentDiv.removeChild(targetParentChild);
    }
    setTimeout(close, 300);
  }

}