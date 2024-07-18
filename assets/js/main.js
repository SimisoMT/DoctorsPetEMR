/**
* Template Name: Personal - v4.8.1
* Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

   /**
   * Preloader function
   */
  
   let preloader = select('#preloader');
   if (preloader) {
     window.addEventListener('load', () => {
       preloader.remove()
     });
   }


(function() {
  "use strict";
  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)

    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }
    /**
   * Disapear Carousel & change nav signing btn innerHTML on signing btn click 
   */
    on('click', '#first-signing', function(e) {
      if(select('.carousel').classList.contains("apeared")){
      select('.carousel').classList.remove("apeared");  
      select('.carousel').classList.add("disapeared");
      this.innerHTML = "Home";
      }else{
        select('.carousel').classList.remove("disapeared");  
        select('.carousel').classList.add("apeared");
        this.innerHTML = "Signing";
      }
    })
    
    on('click', '#second-signing', function(e) {
      if(select('.carousel').classList.contains("apeared")){
      select('.carousel').classList.remove("apeared");  
      select('.carousel').classList.add("disapeared");
      select("#first-signing").innerHTML = "Home";
      }else{
        select('.carousel').classList.remove("disapeared");  
        select('.carousel').classList.add("apeared");
        select("#first-signing").innerHTML = "Signing";
      }
    }) 
    on('click', '#third-signing', function(e) {
      if(select('.carousel').classList.contains("apeared")){
      select('.carousel').classList.remove("apeared");  
      select('.carousel').classList.add("disapeared");
      select("#first-signing").innerHTML = "Home";
      }else{
        select('.carousel').classList.remove("disapeared");  
        select('.carousel').classList.add("apeared");
        select("#first-signing").innerHTML = "Signing";
      }
    }) 
    on('click', '#fourth-signing', function(e) {
      if(select('.carousel').classList.contains("apeared")){
      select('.carousel').classList.remove("apeared");  
      select('.carousel').classList.add("disapeared");
      select("#first-signing").innerHTML = "Home";
      }else{
        select('.carousel').classList.remove("disapeared");  
        select('.carousel').classList.add("apeared");
        select("#first-signing").innerHTML = "Signing";
      }
    })
  /**
   * Email address replication for practitioner
   */
  on('change', '#practitioner-email-input', function(e) {
    select('#practitioner-email-replicator').value = this.value;  
  })

  /**
   * Email address replication for petients
   */

    on('change', '#petient-email-input', function(e) {
      select('#petient-email-replicator').value = this.value;  
    })
  

    /**
   * Show signin-practitioner-password
   */
    on('click', '#show-signin-practitioner-password', function(e) {
      if(select('#signin-practitioner-password').type ==="password"){ 
        select('#signin-practitioner-password').type ='text';
      }else{
        select('#signin-practitioner-password').type ='password';
      }
    })

  /**
   * Show signin-petient-password
   */
      on('click', '#show-signin-petient-password', function(e) {
        if(select('#signin-petient-password').type ==="password"){ 
          select('#signin-petient-password').type ='text';
        }else{
          select('#signin-petient-password').type ='password';
        }
      })

  /**
   * Show practitioner-signup-password
   */
  on('click', '#practitioner-signup-password-create-show', function(e) {
    
    if(select('#practitioner-signup-password-create').type === "password" || select('#practitioner-signup-password-create-confirm').type === "password" ){ 
      select('#practitioner-signup-password-create').type = "text"; 
      select('#practitioner-signup-password-create-confirm').type = "text";
    }else{
      select('#practitioner-signup-password-create').type = "password"; 
      select('#practitioner-signup-password-create-confirm').type ="password";
    }
  })

    /**
   * Show petient-signup-password
   */
    on('click', '#petient-signup-password-create-show', function(e) {
    
      if(select('#petient-signup-password-create').type === "password" || select('#petient-signup-password-create-confirm').type === "password" ){ 
        select('#petient-signup-password-create').type = "text"; 
        select('#petient-signup-password-create-confirm').type = "text";
      }else{
        select('#petient-signup-password-create').type = "password"; 
        select('#petient-signup-password-create-confirm').type ="password";
      }
    })

      /**
   * Validate comparison of signin-practitioner-passwords
   */
  on('change', '#practitioner-signup-password-create', function(e) {
    if(this.value !== select('#practitioner-signup-password-create-confirm').value){ 
      this.classList.remove("is-valid");
      select('#practitioner-signup-password-create-confirm').classList.remove("is-valid");
    }
  })
  
  on('change', '#practitioner-signup-password-create-confirm', function(e) {
    if(this.value === select('#practitioner-signup-password-create').value && select('#practitioner-signup-password-create').value !== "" && this.value !== ""){ 
      this.classList.add("is-valid");
      select('#practitioner-signup-password-create').classList.add("is-valid");
    }else{
      this.classList.remove("is-valid");
      select('#practitioner-signup-password-create').classList.remove("is-valid");
    }
  })

        /**
   * Validate comparison of signin-practitioner-passwords
   */
        on('change', '#petient-signup-password-create', function(e) {
          if(this.value !== select('#petient-signup-password-create-confirm').value){ 
            this.classList.remove("is-valid");
            select('#petient-signup-password-create-confirm').classList.remove("is-valid");
          }
        })
        
        on('change', '#petient-signup-password-create-confirm', function(e) {
          if(this.value === select('#petient-signup-password-create').value && select('#petient-signup-password-create').value !== "" && this.value !== ""){ 
            this.classList.add("is-valid");
            select('#petient-signup-password-create').classList.add("is-valid");
          }else{
            this.classList.remove("is-valid");
            select('#petient-signup-password-create').classList.remove("is-valid");
          }
        })

  
})()