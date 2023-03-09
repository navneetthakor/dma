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

         function focuscontc(){
            fname = document.getElementById("fname");
            fname.focus();
        }
