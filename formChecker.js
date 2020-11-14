console.log("LOADED");
    let input1 = document.querySelector("#shirt");
    let input2 = document.querySelector("#scarves");
    let input3 = document.querySelector("#beanie");
    let username = document.querySelector("#username");
    let password = document.querySelector("#password");
    let ship1 = document.querySelector("#question-1-ans-A");
    let ship2 = document.querySelector("#question-1-ans-B");
    let ship3 = document.querySelector("#question-1-ans-C");
    var isValid = true;

    // document.querySelector("#myForm").addEventListener("#submit", (e) => {
        // console.log("SUBMITTED");
        // if(!test())
        // {
        //     e.preventDefault();
        //     console.log("PREVENTED");
        // }
    // });

    function test()
    {
      console.log("TEST");
      if(!ship1.checked && !ship2.checked && !ship3.checked)
      {
        // event.preventDefault();
        document.getElementById("isValid").innerHTML = "Select a shipping option! Fix, then check again!4444444444";
        isValid = false;
      }
      else if(password.value.length == 0 || password.value == "")
      {
        document.getElementById("isValid").innerHTML = "No empty password allowed! Fix, then check again!";
        // event.preventDefault();
        isValid = false;
      }
      else if(input1.value < 0 || input2.value < 0 || input3.value < 0 || input1.value == "" || input2.value == "" || input3.value == "")
      {
        document.getElementById("isValid").innerHTML = "Select a valid number for each item! Fix, then check again!";
        // event.preventDefault();
        isValid = false;
      }
      else if(!validEmail(username.value))
      {
        document.getElementById("isValid").innerHTML = "Invalid email format! Fix, then check again!";
        // event.preventDefault();
        isValid = false;
      }
      else
      {
        isValid = true;
      }

      if(isValid==true)
      {
        document.getElementById("isValid").innerHTML = "User input is valid, submit now!";
      }
    }

    function validEmail(username)
    {
      if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(username))
      {
        return true;
      }
      return false;
    }

    function resett()
    {
      console.log("RESET");
      document.getElementById("isValid").innerHTML = "";
    }

// });
