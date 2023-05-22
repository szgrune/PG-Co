---
layout: contact
title: Contact
---

<style>
  input {
    width: 40%;
    padding: 5px 5px; 
  }
  
  textarea {
    width: 90%;
    height: 100px;
  }
  
  .contact-input {
    margin-bottom: 15px;
  }
  
  button[type="submit"] {
    font-family: 'Folio Book';
    font-size: 16px;
    color: black;
    background: white;
    border: 1px solid black;
    border-radius: 5px;
  }
</style>

## Tell Us About Your Project

<form accept-charset="UTF-8" action="https://formkeep.com/f/11be1a86b6d0" enctype="multipart/form-data" method="POST" target="_blank">
  <label for="email">Email:</label>
  <br>  
  <input type="email" class="contact-input" name="email" placeholder="example@example.com">
  <br>
  <label for="name">Name:</label>
  <br>  
  <input type="text" class="contact-input" name="name">
  <br>
  <label for="message">Message:</label>
  <br> 
  <textarea id="message"></textarea>
  <br>
  <input type="hidden" name="utf8" value="✓">
  <button type="submit">Submit</button>
</form>
