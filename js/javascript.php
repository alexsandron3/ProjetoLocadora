$('input[name="cpfCliente"]').mask('000.000.000-00');
$('input[name="telefoneCliente"]').mask('(00) 0 0000-0000');




//TRASNFORMANDO TEXT EM UPPERCASE
function upperCaseF(a){
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
}


//CALCULANDO DATA DE NASCIMENTO
function ageCount() {
    var now = new Date();                           
    var currentY= now.getFullYear();                
    var currentM= now.getMonth();                   
    var currentD= now.getDate();                    
      
    var dobget =document.getElementById("dataNascimento").value; 
    var dob= new Date(dobget);                          
    var prevY= dob.getFullYear();                          
    var prevM= dob.getMonth();                             
    var prevD= dob.getDate();                               
      
    var ageY =currentY - prevY;
    var ageM =Math.abs(currentM- prevM);          
    var ageD = Math.abs(currentD-prevD -1);

    
    if(ageY < 0 || ageY > 150){
      document.getElementById('dataNascimento').value = "00/00/3333" ;
      var idadeConfirm = confirm("IDADE INVÁLIDA");
    }else{  
      document.getElementById('idadeCliente').value = ageY;
    }
}