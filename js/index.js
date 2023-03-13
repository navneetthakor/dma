        
        // script for home page 
        const fid=document.querySelectorAll('p');
        fid.forEach(p=>{
            p.addEventListener('mouseover', function(changeContent){
                var id = changeContent.target.id; //target returns the element where event occured. and thus, target.id will give us id of element where event occured.
                const a = document.getElementsByClassName(id);
                if(a){
                    const source= document.getElementById(id);
                    const target= document.getElementById('s3');
                    const style = window.getComputedStyle(source); //returns css style declaration object.
                    
                    
                    // Get the text color value from the computed style
                    const b = style.getPropertyValue('background-color');
                    target.style.background=b;
                    target.style.color='white';
                    a[0].style.display='block';
                }
            });
        });

        // script for contact us page 
    //     let mess = 0
    //    function bfocus(){
    //     if(mess == 0){
    //         mess = 1;
    //     b = document.getElementById('brand');
    //     b.style.color='orangered';
    //     b.style.background='whitesmoke';
    //     yt = document.getElementById('Web/App');
    //         yt.placeholder = "Web/App link";
    //     breg = document.getElementById('book-reg');
    //         breg.value = "Book Appointment";
    //     }
    //     else{
    //         c = document.getElementById('creator');
    //     c.style.background='rgb(214, 214, 214)';
    //         c.style.color='black';
    //         mess = 0;
    //         bfocus();
    //     }
    //    }

    //    function cfocus(){
    //     if(mess == 0){
    //         mess = 1;
    //     c = document.getElementById('creator');
    //     c.style.background='whitesmoke';
    //         c.style.color='orangered';

    //         yt = document.getElementById('Web/App');
    //         yt.placeholder = "channel/account link";

    //         breg = document.getElementById('book-reg');
    //         breg.value = "Register";
    //     }
    //     else{
    //         b = document.getElementById('brand');
    //         b.style.color='black';
    //         b.style.background='rgb(214, 214, 214)';
    //         mess = 0;
    //         cfocus();
    //     }
    //    }
    var flag=1;
    function validatefreedemo(event){
        var strings="";
        console.log("hello world");
        var fname=document.freedemo.fname.value;
        var exp=new RegExp("^[a-z A-Z]+$");
        var x=exp.test(fname);
        if(!x){
            strings+="Wrong first name\n";
            flag=0;
        }

        var lname=document.freedemo.lname.value;
        exp=new RegExp("^[a-z A-Z]+$");
        x=exp.test(lname);
        if(!x){
            strings+=("Wrong last name\n");
            flag=0;
        }

        var ph=document.freedemo.pnumber.value;
        exp=new RegExp("^[6-9]{1}[0-9]{9}$");
        x=exp.test(ph);
        if(!x){
            strings+="Wrong phone number\n";
            flag=0;
        }

        var em=document.freedemo.email.value;
        exp=new RegExp("^[a-z A-Z 0-9]{1}[a-z A-Z 0-9]+@[a-z A-Z]+\.[a-z]{1,3}$");
        x=exp.test(em);
        if(!x){
            strings+="Wrong email id\n";
            flag=0;
        }

        var link=document.freedemo.WebApp.value;
        exp=new RegExp("^[w]{3}\.[a-z 0-9]+\.[a-z]{2,3}$");
        x=exp.test(link);
        if(!x){
            strings+="Wrong URL type\n";
            flag=0;
        }

        if(flag==1){
            var s="Successfully Submitted.";
            alert(s);
            return;
        }
        alert(strings);
        event.preventDefault();
    }