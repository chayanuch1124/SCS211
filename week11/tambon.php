<body>
  <div class="container">
    <div>
      <select id="input_province">
        <option value="">กรุณาเลือกจังหวัด</option>
      </select>
    </div>
    <div>
      <select id="input_amphoe">
        <option value="">กรุณาเลือกเขต/อำเภอ</option>
      </select>
    </div>
    <div>
      <select id="input_tambon">
        <option value="">กรุณาเลือกแขวง/ตำบล</option>
      </select>
    </div>
    <div>
      <input id="input_zipcode" placeholder="รหัสไปรษณีย์" />
    </div>
  </div>

  <script>
    function showProvinces() {
      let input_province = document.querySelector("#input_province");
      let url = "https://ckartisan.com/api/provinces";
      console.log(url);
      // if(input_province.value == "") return;
      fetch(url)
        .then((response) => response.json())
        .then((result) => {
          console.log(result);
          //UPDATE SELECT OPTION
          let input_province = document.querySelector("#input_province");
          input_province.innerHTML =
            '<option value="">กรุณาเลือกจังหวัด</option>';
          for (let item of result) {
            let option = document.createElement("option");
            option.text = item.province;
            option.value = item.province;
            input_province.appendChild(option);
          }
          //QUERY AMPHOES
          showAmphoes();
        });
    }

    function showAmphoes() {
      let input_province = document.querySelector("#input_province");
      let url =
        "https://ckartisan.com/api/amphoes?province=" + input_province.value;
      console.log(url);
      // if(input_province.value == "") return;
      fetch(url)
        .then((response) => response.json())
        .then((result) => {
          console.log(result);
          //UPDATE SELECT OPTION
          let input_amphoe = document.querySelector("#input_amphoe");
          input_amphoe.innerHTML =
            '<option value="">กรุณาเลือกเขต/อำเภอ</option>';
          for (let item of result) {
            let option = document.createElement("option");
            option.text = item.amphoe;
            option.value = item.amphoe;
            input_amphoe.appendChild(option);
          }
          //QUERY AMPHOES
          showTambons();
        });
    }
    function showTambons() {
      let input_province = document.querySelector("#input_province");
      let input_amphoe = document.querySelector("#input_amphoe");
      let url =
        "https://ckartisan.com/api/tambons?province=" +
        input_province.value +
        "&amphoe=" +
        input_amphoe.value;
      console.log(url);
      // if(input_province.value == "") return;
      // if(input_amphoe.value == "") return;
      fetch(url)
        .then((response) => response.json())
        .then((result) => {
          console.log(result);
          //UPDATE SELECT OPTION
          let input_tambon = document.querySelector("#input_tambon");
          input_tambon.innerHTML =
            '<option value="">กรุณาเลือกแขวง/ตำบล</option>';
          for (let item of result) {
            let option = document.createElement("option");
            option.text = item.tambon;
            option.value = item.tambon;
            input_tambon.appendChild(option);
          }
          //QUERY AMPHOES
          showZipcode();
        });
    }
    function showZipcode() {
      let input_province = document.querySelector("#input_province");
      let input_amphoe = document.querySelector("#input_amphoe");
      let input_tambon = document.querySelector("#input_tambon");
      let url =
        "https://ckartisan.com/api/zipcodes?province=" +
        input_province.value +
        "&amphoe=" +
        input_amphoe.value +
        "&tambon=" +
        input_tambon.value;
      console.log(url);
      // if(input_province.value == "") return;
      // if(input_amphoe.value == "") return;
      // if(input_tambon.value == "") return;
      fetch(url)
        .then((response) => response.json())
        .then((result) => {
          console.log(result);
          //UPDATE SELECT OPTION
          let input_zipcode = document.querySelector("#input_zipcode");
          input_zipcode.value = "";
          for (let item of result) {
            input_zipcode.value = item.zipcode;
            break;
          }
        });
    }
    //EVENTS
    document
      .querySelector("#input_province")
      .addEventListener("change", (event) => {
        showAmphoes();
      });
    document
      .querySelector("#input_amphoe")
      .addEventListener("change", (event) => {
        showTambons();
      });
    document
      .querySelector("#input_tambon")
      .addEventListener("change", (event) => {
        showZipcode();
      });

    showProvinces();
  </script>
</body>