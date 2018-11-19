 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.8/firebase.js"></script>

<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCsw57hA-mjdJWo7oyxL-ZKDZecmGem2Rc",
    authDomain: "minigardensystem.firebaseapp.com",
    databaseURL: "https://minigardensystem.firebaseio.com",
    projectId: "minigardensystem",
    storageBucket: "minigardensystem.appspot.com",
    messagingSenderId: "803201866160"
  };
  firebase.initializeApp(config);
  // //var x = document.getElementById("load").innerText;
  // document.getElementById("demo").innerHTML = "10 dem";
 var starCountRef = firebase.database().ref('sensor/doam');
    starCountRef.on('value', function(snapshot) {
        document.write(snapshot.val());
});

  
</script>