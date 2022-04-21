<template>
  <Header/>
  <div class="login">
    <div class="logininner">
        <div class="loginimg">
            <img src="./assets/images/log-in-icon.png">
        </div>
        <div class="loginform">
            <div class="loginper">
                <div class="loginflex">
                    <div class="loginuser">
                        <img src="./assets/images/user.jpg">
                    </div>
                    <div class="logintext">
                        <input type="text" placeholder="Username" class="logintext" v-model="username">
                    </div>
                </div>
            </div>
            <div class="loginper">
                <div class="loginflex">
                    <div class="loginuser">
                        <img src="./assets/images/password.jpg">
                    </div>
                    <div class="logintext">
                        <input type="password"  placeholder="Password" class="logintext" v-model="password">
                    </div>
                </div>
            </div>
            <div class="loginper">
                <button @click="login()">LOGIN</button>
            </div>
            <div class="loginper">
                <p>Forgot Password? <a href="">Click Here</a></p>
            </div>
        </div>
    </div>
    <div class="loginintro">
        <h2>WANT TO</h2>
        <h2>JOIN THE FIGHT</h2>
        <h2>FOR</h2>
        <h2>HEALTH CARE</h2>
        <h2>AS A</h2>
        <h2>HUMAN RUGHT?</h2>
        <h5>
            <p>SIGN UP TO RECEIVE EMAIL</p>
            <p>UPDATES FROM PIH ENGAGE!</p>
        </h5>
        
    </div>
  </div>
  <Footer/>
</template>

<script>
import Header from './components/header.vue'
import Footer from './components/footer.vue'
import  './assets/css/login.css'


export default {
  name: 'App',
  components: {
    Header,
    Footer
  },
  methods:{
    login:function(){
      //console.log(this.username);
      var api = "http://localhost/user.php?username=" + this.username + "&password=" + this.password;
      fetch(api, {
        method: "GET"
      })
        .then(res => res.json())
        .then(response => {
            console.log(response.res);
        
        if(response.res == 0){
            alert("the username or password error");
        }if(response.res == 1){
            alert("success");
             window.location.href="/index"; 
        }
        
    })
    
    .catch(ex => {
        alert(ex);
    });

    }
  }

}

</script>
