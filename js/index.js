        
        // script for home page 
        const fid=document.querySelectorAll('p');
        fid.forEach(p=>{
            p.addEventListener('mouseover', function(changeContent){
                var id = changeContent.target.id; //target returns the element where event occured. and thus, target.id will give us id of element where event occured.
                const a = document.getElementsByClassName(id);
                if(a){
                    a[0].style.display='block';
                }
                
                const source= document.getElementById(id);
                const target= document.getElementById('s3');

                source.addEventListener('mouseover', function() {
                // Get the computed style of the hovered element
                const style = window.getComputedStyle(source);

                // Get the text color value from the computed style
                const b = style.getPropertyValue('background-color');
                target.style.background=b;
                target.style.color='white';
                });
                
            });
        });

        // script for contact us page 
        let mess = 0
       function bfocus(){
        if(mess == 0){
            mess = 1;
        b = document.getElementById('brand');
        b.style.color='orangered';
        b.style.background='whitesmoke';
        yt = document.getElementById('Web/App');
            yt.placeholder = "Web/App link";
        breg = document.getElementById('book-reg');
            breg.value = "Book Appointment";
        }
        else{
            c = document.getElementById('creator');
        c.style.background='rgb(214, 214, 214)';
            c.style.color='black';
            mess = 0;
            bfocus();
        }
       }

       function cfocus(){
        if(mess == 0){
            mess = 1;
        c = document.getElementById('creator');
        c.style.background='whitesmoke';
            c.style.color='orangered';

            yt = document.getElementById('Web/App');
            yt.placeholder = "channel/account link";

            breg = document.getElementById('book-reg');
            breg.value = "Register";
        }
        else{
            b = document.getElementById('brand');
            b.style.color='black';
            b.style.background='rgb(214, 214, 214)';
            mess = 0;
            cfocus();
        }
       }