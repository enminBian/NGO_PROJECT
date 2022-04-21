<template>
  <div class="header">
      <div class="container">
          <div class="logo">
              <img src="../assets/images/logo.png">
          </div>
          <div class="nav">
              <ul>
                  <li><a href="/index">OUR WORK</a></li>
                  <li><a href="">OUR APPROACH</a></li>
                  <li><a href="">ABOUT</a></li>
                  <li><a href="">CONTACT</a></li>
                  
              </ul>
          </div>
          <div class="loginin">
              <ul>
                  <li><a href="/login">LOG IN</a></li>
                  <li><a href="/login"><img src="../assets/images/log-in-icon.png"</a>></li>
              </ul>
          </div>
      </div>
  </div>  
</template>

<script>
import  '../assets/css/public.css'
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>
