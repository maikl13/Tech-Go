
const firebaseConfig = {
    apiKey: "AIzaSyApPYeB1xOAYTjvIC6bNURj5ZHbTFvpk00",
    authDomain: "estore-7d8dc.firebaseapp.com",
    projectId: "estore-7d8dc",
    storageBucket: "estore-7d8dc.appspot.com",
    messagingSenderId: "41176478193",
    appId: "1:41176478193:web:028d440f0068b31d2dd450",
    measurementId: "G-WFEKB9TB4C"
 };
firebase.initializeApp(firebaseConfig);
firebase.analytics();
const messaging = firebase.messaging();

const registerServiceWorker = () => {
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker
        .register('/firebase-messaging-sw.js')
        .then(function (registration) {
          console.log('Registration successful, scope is:', registration.scope);
        })
        .catch(function (err) {
          console.log('Service worker registration failed, error:', err);
        });
    }
  };

  registerServiceWorker();

  messaging.getToken().then((currentToken) => {
    if (currentToken) {
        // console.log("user token" + currentToken)
        saveAdminToken(currentToken)
    } else {
        console.log('No registration token available. Request permission to generate one.');
    }
  }).catch((err) => {
    console.log('An error occurred while retrieving token. ', err);
  });

  function saveAdminToken(token) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    }); 
    $.ajax({
        url : "/admin/notifications/register",
        type:"post",
        data: {token: token},
        success: function(data) {
          
        }
    })
  }