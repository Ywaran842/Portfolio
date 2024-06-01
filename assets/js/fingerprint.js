const fpPromise = import('https://fpjscdn.net/v3/xvR2Lgwjxb1iwSZjsI2Y')
  .then(FingerprintJS => FingerprintJS.load())
  .then(fp => fp.get())
  .then(result => {
    var visitorId = result.visitorId;
    console.log(visitorId);
    alert("helo");
    $(document).ready(function () {

      Cookies.set('visitorId', visitorId, { expires: 365 });

    });
    // Set the visitorId as a cookie

    // Log the visitorId for debugging
  })
  .catch(error => console.error(error));

// When the "Sign in" button is clicked, submit the form

