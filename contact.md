---
layout: contact
title: Contact
---
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<style>
  #email {
    background-color: white;
    margin-top: 40px;
    -webkit-box-shadow: 0 8px 10px 1px rgba(0,0,0,0.14), 0 3px 14px 2px rgba(0,0,0,0.12), 0 5px 5px -3px rgba(0,0,0,0.3);
    box-shadow: 0 8px 10px 1px rgba(0,0,0,0.14), 0 3px 14px 2px rgba(0,0,0,0.12), 0 5px 5px -3px rgba(0,0,0,0.3);
  }
  #email::after {
      clear: both;
      display: block;
      content: '';
  }
  header {
      padding: 10px;
      text-align: center;
      color: black;
      font-size: 22px;
  }
  form {
      margin: 30px 0;
  }
  #loaders {
      text-align: center;
  }
  #loaders img {
      width: 150px;
      margin: 0 auto;
      /* display: none; */
  }
  #resetBtn {
      float: right;
  }

  #spinner {
      display: none;
  }
</style>

<div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div id="email" class="m2">
                    
                    <header id="header" class=" grey lighten-1">
                        Get in Touch
                    </header>

                    <form id="send-mail" action="" class="col s10 offset-s1">
                        <div class="row">
                                <div class="input-field col s12">
                                    <label for="email">For:</label>
                                    <input id="email" type="email">
                                </div>
                                <div class="input-field col s12">
                                    <label for="subject">Subject:</label>
                                    <input id="subject" type="text">
                                </div>
                        </div>

                        <div class="row">
                                <div class="input-field col s12">
                                    <label for="message">Message: </label>
                                    <textarea id="message" class="materialize-textarea"></textarea>
                                </div>
                        </div>
                            
                        <div class="row" id="loaders">
                                <img id="spinner" src="https://www.dropbox.com/s/wfsji06m6jfe0yl/spinner.gif?raw=1" width="150">
                        </div>
                            
                        <div class="row">
                                <div class="col s6">
                                    <button id="send" class="btn waves-effect waves-light  grey lighten-2" type="submit" name="action">Send
                                            <i class="material-icons right">send</i>
                                    </button>
                                </div>
                                <div class="col s6">
                                    <button id="resetBtn" class="btn waves-effect waves-light light-blue darken-2" type="submit">Reset
                                            <i class="material-icons right">delete</i>
                                    </button>
                                </div>
                        </div>
                    </form> 
                    
                </div> <!--.contenido-->
            </div>
      </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  /////////////////////////////Variables//////////////////////////////

  const email = document.getElementById('email');
  const subject = document.getElementById('subject');
  const message = document.getElementById('message');
  const sendBtn = document.getElementById('send');
  const form = document.getElementById('send-mail');
  const resetBtn = document.getElementById('resetBtn');

  //////////////////////////Event Listeners///////////////////////////

  (function eventListeners(){

      //Beginning of the application and disables the button.
      document.addEventListener('DOMContentLoaded', startApp);

      //Form camps 
      email.addEventListener('blur', validateData);
      subject.addEventListener('blur', validateData);
      message.addEventListener('blur', validateData);

      //Submit button or submit action.
      sendBtn.addEventListener('click', sendEmail);
      //send.addEventListener('submit', sendEmail);

      //Reset button or submit action.
      resetBtn.addEventListener('click', resetForm);

  })();


  ///////////////////////Function////////////////////////////////////////

  function startApp(){

      // disables the send.
      sendBtn.disabled = true;
  }

  //Checks if something is written. 

  function validateData(){

    //Validates the text.
    validateLength(this);

    //Validates the email 
    if(this.type == 'email'){

      validateEmail(this);  
    }
     
    let errors = document.querySelectorAll('.error');

    if(email.value !== '' && subject.value !== '' && message.value!==''){
        if(errors.length === 0){
            sendBtn.disabled = false;
        } 
    }else{
        sendBtn.disabled = true;
    }  
    
    }
 
    //When reset button is clicked.
    function resetForm(e){
        e.preventDefault();
        form.reset();
    }

    //When send button is clicked.

    function sendEmail(e){
     e.preventDefault();
     const spinnerGif = document.querySelector('#spinner');
     spinnerGif.style.display = 'block';

     const sent = document.createElement('img');
     sent.src = 'https://www.dropbox.com/s/0g5h91zyozcbenc/mail.gif?raw=1';
     sent.style.display = 'block';
      var link = `mailto:${email.value}&subject=${escape(subject.value)}&body=${escape(message.value)}`;

     // timer for the spinner and mail.
     setTimeout(function(){
       spinnerGif.style.display = 'none';
       document.querySelector('#loaders').appendChild(sent);   
       setTimeout(function(){
          sent.remove();
          form.reset();
          sendBtn.disabled = true;
          window.location.href = link;
       },1500);
     },3000);
    }

    //Check the lenght in the form inputs.
    function  validateLength(campo){
        
        if(campo.value.length > 0){
            campo.style.borderBottomColor = 'green';
            campo.classList.remove('error');
        }else{
            campo.style.borderBottomColor = 'red';
            campo.classList.add('error');
        }

    }

    function validateEmail(campo){
        const message = campo.value;
        if(message.indexOf('@') !==-1){
            campo.style.borderBottomColor = 'green';
            campo.classList.remove('error');
        }else{
            campo.style.borderBottomColor = 'red';
            campo.classList.add('error');
        }
    }
</script>  
    
    
