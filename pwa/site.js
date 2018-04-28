
const publicKey = 'BOrbZLTqZCjClwUOWu3q6loMaNqdOYg-Zqa4zKsJ4WuhsbMQGBl2V_YRP_yqed3l7lCoXrtTaj3JPHXKkBt0r80';

navigator.serviceWorker && navigator.serviceWorker.register('./sw.js').then(function(registration) {
    console.log('Excellent, registered with scope: ', registration.scope);
  });
  
  navigator.serviceWorker && navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {  
    serviceWorkerRegistration.pushManager.getSubscription()  
      .then(function(subscription) {  
        if (subscription) {
            console.info('Got existing', subscription);
            window.subscription = subscription;
            return;  // got one, yay
          }
    
          const applicationServerKey = urlB64ToUint8Array(publicKey);
          serviceWorkerRegistration.pushManager.subscribe({
              userVisibleOnly: true,
              applicationServerKey,
          })
            .then(function(subscription) { 
              console.info('Newly subscribed to push!', subscription);
              window.subscription = subscription;
            });
      });
  });