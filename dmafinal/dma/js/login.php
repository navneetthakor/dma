function popsignuppage() {
    window.location.href="/dma/html/signup.php";
}
function poplogin(){
    window.location.href = "/dma/html/login.php";
}
function signupentry(event){
    var name=document.signupform.username.value;
    var em=document.signupform.email.value;
    var pass=document.signupform.pswd.value;
    var flag=1,strings="";
    var exp=new RegExp("^[A-Z]{1}[a-z]*$");
    var x=exp.test(name);
    if(!x){
        strings+="Invalid name format.\n";
        flag=0;
    }
    exp=new RegExp("^[a-z A-Z 0-9]+@[a-z]+\.[a-z]{2,4}$");
    x=exp.test(em);
    if(!x){
        strings+="Invalid email type.\n";
        flag=0;
    }
    exp=new RegExp("^[a-z A-Z 0-9 # @ ^ % &]{8,16}$");
    x=exp.test(pass);
    if(!x){ 
        strings+="Wrong password selection.\n";
        flag=0;
    }
    if(flag==0){
        alert(strings);
        event.preventDefault();
    }
    if(flag==1){
        //insert into database the data entered by user.
    }
}