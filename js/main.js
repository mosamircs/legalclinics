/*
////// dont mess with this file /////////////
*/
//////////////////////main variables//////////////////////////////////
const form = document.getElementById('form');

const next = document.getElementById('next-1');
const prev = document.getElementById('prev-1');

const divButChose = document.getElementById('but-chose');
const proBar = document.getElementById('pro-bar');

const layer = document.getElementsByClassName('layer');
const progress = document.getElementById('progress');
const circles = document.querySelectorAll('.circle');

///////// show layers 
let currLayer = 0;
showLayer(currLayer);

function showLayer(curr){
    layer[curr].style.display = 'block';
    // console.log(layer.length - 1)
    if(curr == 0){
        divButChose.style.display = 'none';
        proBar.style.display = 'none';
    } else{
        divButChose.style.display = 'block';
        proBar.style.display = 'block';
    }
    if (curr == (layer.length - 1)) {
        document.getElementById("next-1").innerHTML = "حفظ";
      } else {
        document.getElementById("next-1").innerHTML = "التالى";
      }
    //update progress bar 
    update();
}
//////// change layers
function changeLayer(curr){
    //hold for validation
    if (curr == 1 && !validateForm()) return false;
    
    layer[currLayer].style.display = "none";
    currLayer = currLayer + curr;
        if (currLayer >= layer.length) {
            form.submit();
            return false;
        }
    // }
    showLayer(currLayer);
    // console.log('fhjf');
}



/////////// form validation

const userName = document.getElementById('username');
const userEmail = document.getElementById('email');
const userPhone = document.getElementById('phone');
const errorUserName = document.getElementById('error-userName');
const errorUserEmail = document.getElementById('error-email');  
const errorUserPhone = document.getElementById('error-phone');  
let emailPattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
let phonePattern = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
let inputVal = document.getElementsByTagName('input');
let inputTxt = document.getElementsByClassName('lay2');
let inputTxt2 = document.getElementsByClassName('lay3');


function validateForm() {
    let valid = true;
 if(currLayer == 0)
 {
    if(userName.value == ''){
    //user name
        errorUserName.innerHTML="يجب ادخال اسم المستخدم ";
        errorUserName.style.display="block";
        errorUserName.style.fontSize="14px";
        errorUserName.style.color="red";
        userName.style.border = "1px solid red";
        //user email
    if(userEmail.value == '')
        errorUserEmail.innerHTML="يجب ادخال البريد الالكترونى";
        errorUserEmail.style.display="block";
        errorUserEmail.style.fontSize="14px";
        errorUserEmail.style.color="red";
        userEmail.style.border = "1px solid red";
        //user phone
    if(userPhone.value == '')
        errorUserPhone.innerHTML="يجب ادخال رقم الهاتف";
        errorUserPhone.style.display="block";
        errorUserPhone.style.fontSize="14px";
        errorUserPhone.style.color="red";
        userPhone.style.border = "1px solid red";
    // console.log('hjekh')
    valid = false;
}else{
if(emailPattern.test(userEmail.value) && (isNaN(userName.value)) && phonePattern.test(userPhone.value)){
    //user name
        errorUserName.innerHTML="";
        userName.style.border = "1px solid green";
    //user email
        errorUserEmail.innerHTML="";
        userEmail.style.border = "1px solid green";
    //user phone
        errorUserPhone.innerHTML="";
        userPhone.style.border = "1px solid green";
    valid = true;
}else{
    //user name
        errorUserName.innerHTML="اسم المستخدم يجب الا يحتوى على رموز او ارقام";
        errorUserName.style.display="block";
        errorUserName.style.fontSize="14px";
        errorUserName.style.color="red";
        userName.style.border = "1px solid red";
                // console.log('hfh')
    //user email
        errorUserEmail.innerHTML="البريد الالكترونى غير صالح";
        errorUserEmail.style.display="block";
        errorUserEmail.style.fontSize="14px";
        errorUserEmail.style.color="red";
        userEmail.style.border = "1px solid red";
        // console.log('jdhj')
        //user phone
        errorUserPhone.innerHTML="رقم الهاتف يجب الا يقل عن 11 رقم ولا يحتوى على رموز او ارقام";
        errorUserPhone.style.display="block";
        errorUserPhone.style.fontSize="14px";
        errorUserPhone.style.color="red";
        userPhone.style.border = "1px solid red";
        valid = false;
    }
  }
}
if(currLayer == 1){
    // console.log('dfghjk')
    for(let i=0; i<inputVal.length; i++){
        if(inputVal[i]['type'] == ['radio']){
            if(inputVal[i]['checked'] != true){
                if($('.form-check-input:checked').length == 0)
                {
                    inputVal[i].style.border = '1px solid red';
                // console.log(radioBtn[i])
                    valid = false;
                }
            } else {
                inputVal[i].style.border = '1px solid #000086';
                valid = true;
            }
        }
    }
}
if(currLayer == 2){
   
     for(let i=0; i<inputTxt.length; i++){
        // console.log(inputTxt[i])
          if(inputTxt[i].value == ''){
              inputTxt[i].style.border = '1px solid red';
                 // console.log(radioBtn[i])
                valid = false;
            } else {
                inputTxt[i].style.border = '1px solid #000086';
                valid = true;
                // console.log('dfdg')
       }
    }
 }
 if(currLayer == 3){
   
    for(let i=0; i<inputTxt2.length; i++){
       // console.log(inputTxt[i])
         if(inputTxt2[i].value == ''){
             inputTxt2[i].style.border = '1px solid red';
                // console.log(radioBtn[i])
               valid = false;
           } else {
               inputTxt2[i].style.border = '1px solid #000086';
               valid = true;
               // console.log('dfdg')
      }
   }
}
if(currLayer == 4){
    const inputAdd = document.getElementById('inputtextAdd');
    if(inputAdd.value == ''){
    //    console.log($('#inputtextAdd'))
    inputAdd.style.border = '1px solid red';
    valid = false;
   } else {
    inputAdd.style.border = '1px solid #000086';
    valid = true;

   }
}

    if (valid) {
    //   document.getElementsByClassName("step")[currentTab].className += " finish";
     //user name
     errorUserName.innerHTML="";
     userName.style.border = "1px solid green";
 //user email
     errorUserEmail.innerHTML="";
     userEmail.style.border = "1px solid green";
 //user phone
     errorUserPhone.innerHTML="";
     userPhone.style.border = "1px solid green";
    }
    // console.log(valid)
    return valid; // return the valid status

}

// Restricts input for the given textbox to the given inputFilter function.
function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
      textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
          this.value = "";
        }
      });
    });
  }
  setInputFilter(document.getElementById("inputtext3"), function(value) {
    return /^-?\d*[.,%]?\d*$/.test(value); });
  setInputFilter(document.getElementById("inputtext4"), function(value) {
    return /^-?\d*[.,%]?\d*$/.test(value); });
  setInputFilter(document.getElementById("inputtext6"), function(value) {
    return /^-?\d*[.,%]?\d*$/.test(value); });

// form bootstrap

// (function () {
//     'use strict'
  
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var forms = document.querySelectorAll('.needs-validation')
  
//     // Loop over them and prevent submission
//     Array.prototype.slice.call(forms)
//       .forEach(function (form) {
//         form.addEventListener('submit', function (event) {
//           if (!form.checkValidity()) {
//             event.preventDefault();
//             event.stopPropagation();
//             // console.log('not valid')
//         }
//           form.classList.add('was-validated')
//         }, false)
//       })
//   })()
/////////change progress bar
  
  function update(){
    circles.forEach((circles , cirIndx)=>{
        if(cirIndx < currLayer){
            circles.classList.add('active');
        } else{
            circles.classList.remove('active')
        }
    });
    const actives = document.querySelectorAll('.active');

    progress.style.width =( (actives.length - 1) / (circles.length - 1) ) * 100 + '%';
}

//////////////////////render country & flags plugin//////////////
     const input = document.querySelector("#phone");
        window.intlTelInput(input,({
      // options here
    }));
    $(document).ready(function() {
        $('.iti__flag-container').click(function() { 
          var countryCode = $('.iti__selected-flag').attr('title');
          var countryCode = countryCode.replace(/[^0-9]/g,'')
          $('#phone').val("");
          $('#phone').val("+"+countryCode+" "+ $('#phone').val());
       });
    });


/////////////////////////comp-types---section-1/////////////////////////////////
////////chose between comp-types
let areaMoney = document.getElementById('choice-Money')
let areaPeolple = document.getElementById('choice-people');
let btnMoney = document.getElementById('btn-money');
let btnPeople = document.getElementById('btn-people');

btnMoney.addEventListener('click',()=>{
    // console.log('cjfh')
    if(areaMoney.style.display === 'none'){
        areaMoney.style.display = 'block';
        areaPeolple.style.display = 'none';
        btnMoney.classList.replace('notseleted','selected');
        btnPeople.classList.replace('selected','notseleted');
        btnPeople.classList.add('text-align');
        // console.log('hhhg');
    }
});
btnPeople.addEventListener('click',()=>{
    if(areaPeolple.style.display === 'none'){
        areaPeolple.style.display = 'block';
        areaMoney.style.display = 'none';
        btnPeople.classList.replace('notseleted','selected');
        btnMoney.classList.replace('selected','notseleted');
        btnMoney.classList.add('set-position');
    }
});
////////hide and show download info btn
let checkbox1 = document.getElementById('exampleRadios1');
let downBtn1 = document.getElementById('down-1');
let checkbox2 = document.getElementById('exampleRadios2');
let downBtn2 = document.getElementById('down-2');
let checkbox3 = document.getElementById('exampleRadios3');
let downBtn3 = document.getElementById('down-3');
let checkbox4 = document.getElementById('exampleRadios4');
let downBtn4 = document.getElementById('down-4');
let checkbox5 = document.getElementById('exampleRadios5');
let downBtn5 = document.getElementById('down-5');
let checkbox6 = document.getElementById('exampleRadios6');
let downBtn6 = document.getElementById('down-6');
let arrowValue = document.getElementById('arrowValue');
let classValue = document.getElementById('classValue');

function check1(){
    if (checkbox1.checked){
        downBtn1.style.display = 'inline-block';
        downBtn2.style.display = 'none';
        downBtn3.style.display = 'none';
    }
}
function check2(){
    if (checkbox2.checked){
        downBtn1.style.display = 'none';
        downBtn2.style.display = 'inline-block';
        downBtn3.style.display = 'none';
        arrowValue.style.display = 'inline-block';
        classValue.style.display = 'none';
    }
}
function check3(){
    if (checkbox3.checked){
        downBtn1.style.display = 'none';
        downBtn2.style.display = 'none';
        downBtn3.style.display = 'inline-block';
    }
}
function check4(){
    if (checkbox4.checked){
        downBtn5.style.display = 'none';
        downBtn6.style.display = 'none';
        downBtn4.style.display = 'inline-block';
    }
}
function check5(){
    if (checkbox5.checked){
        downBtn4.style.display = 'none';
        downBtn6.style.display = 'none';
        downBtn5.style.display = 'inline-block';
    }
}function check6(){
    if (checkbox6.checked){
        downBtn4.style.display = 'none';
        downBtn5.style.display = 'none';
        downBtn6.style.display = 'inline-block';
    }
}
///////////////////////////////comp-info---section-2/////////////////////////////////
const btnAdd = document.querySelector('#btn-add-sug');

        const parentForm = document.querySelector('#parent-el');
        // console.log(parentDiv)
        let numArray = ['الثالث','الرابع','الخامس','السادس'];
        btnAdd.addEventListener('click',(e)=>{
            e.preventDefault();
            let i = parentForm.getElementsByTagName('div').length;
            // console.log(i)
                if(i < 6){
                    const newform = document.createElement('div');
                    newform.setAttribute('dir','rtl');
                    newform.classList.add('row', 'g-3', 'justify-content-evenly' ,'pt-3','sug1');
                        newform.innerHTML = `<div class="col-md-4">
                                  <label for="inputtext1" class="form-label">الاقتراح ${numArray[0]}</label>
                                  <input type="text" class="form-control" id="inputtext1" name="company_name[]" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputtext2" class="form-label">الاقتراح ${numArray[1]}</label>
                                    <input type="text" class="form-control" id="inputtext2" name="company_name[]" required>
                                  </div>
                                <div class="col-md-4 align-self-end text-center" >
                                    <button class="btn btn-outline-danger" id="btn-delete-sug" type="button" onclick="deleted1()">حذف اقتراحات</button>
                                </div>`;

                    parentForm.appendChild(newform);            
                    } else if(i < 9){
                    const newform = document.createElement('div');
                    newform.setAttribute('dir','rtl');
                    
                    newform.classList.add('row', 'g-3', 'justify-content-evenly' ,'pt-3','sug2');
                   
                        newform.innerHTML = `<div class="col-md-4">
                                  <label for="inputtext1" class="form-label">الاقتراح ${numArray[2]}</label>
                                  <input type="text" class="form-control" id="inputtext1"  name="company_name[]" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputtext2" class="form-label">الاقتراح ${numArray[3]}</label>
                                    <input type="text" class="form-control" id="inputtext2" name="company_name[]" required>
                                  </div>
                                <div class="col-md-4 align-self-end text-center" >
                                    <button class="btn btn-outline-danger" id="btn-delete-sug" type="button" onclick="deleted2()">حذف اقتراحات</button>
                                </div>`;

                    parentForm.appendChild(newform);   
                }  else if (i == 9){
                    btnAdd.disabled = true;
                } else {
                    btnAdd.disabled = false;
                }
            });
            function deleted1(){
                const parentDiv = document.querySelector('.sug1');
                let j = parentDiv.getElementsByTagName('div').length;
                if(j == 3){
                    parentDiv.removeChild(parentDiv.getElementsByTagName('div')[1]);
                } else{

                    parentDiv.remove();
                }
            }
            function deleted2(){
                const parentDiv = document.querySelector('.sug2');
                let j = parentDiv.getElementsByTagName('div').length;
                if(j == 3){
                    parentDiv.removeChild(parentDiv.getElementsByTagName('div')[1]);
                } else{

                    parentDiv.remove();
                }
            }
        
///////////////////////////part-info---section-3//////////////////////////////////////
        const select = document.querySelector('#specificSizeSelect');
        const parentCountEl = document.getElementById('part-form');
        
        for(let i=1; i<= 50; i++){
            const newOption = document.createElement('option');
            const optionText = document.createTextNode(i);
            // set option text
            newOption.appendChild(optionText);
            // and option value
            newOption.setAttribute('value',i);
            select.appendChild(newOption);
        }
        // let divLength = parentCountEl.getElementsByClassName('row').length;
        // console.log(divLength);
        select.addEventListener('change',(e)=>{
            e.preventDefault();
                parentCountEl.innerHTML = '';
                    for(let j=1; j < select.value; j++){
                        const newEl = document.createElement('div');
                        newEl.classList.add('row','g-3','justify-content-around','pt-3');
                        newEl.setAttribute('dir','rtl');
                        newEl.innerHTML = `<div class="col-md-3">
                            <label for="inputtext1" class="form-label" style="display: none;">اسم المساهم</label>  <!--لو شركة مساهمة display=inline-block-->
                                  <label for="inputtext1" class="form-label">اسم المدير</label>
                                  <input type="text" class="form-control lay3" id="inputtext1" name = "shareholder_name">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputtext2" class="form-label"  style="display: none;">جنسيه المساهم</label>
                                  <label for="inputtext1" class="form-label">جنسيه المدير</label>
                                    <input type="text" class="form-control lay3" id="inputtext2" name = "shareholder_nationality">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputtext6" class="form-label"  style="display: none;">نسبه المساهمه</label>
                                  <label for="inputtext1" class="form-label">نسبه المدير</label>
                                    <input type="text" class="form-control lay3" id="inputtext6" name = "shareholder_percentage">
                                </div>
                                    <div class="col-md-5 mb-3">
                                        <label for="formFileMultiple" class="form-label">اضافه البطاقه الشخصية</label>
                                        <input class="form-control lay3" type="file" id="formFileMultiple" name = "personal_id" multiple>
                                      </div>
                                      <div class="col-md-3 x-last align-self-center">
                                        <button class="btn btn-outline-danger" type="reset" style="display: none;" onclick="deleted">حذف المساهم</button> <!--لو شركة مساهمة display=inline-block-->
                                        <button class="btn btn-outline-danger" type="reset" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode)">حذف المدير</button>
                                    </div>
                                    <hr>`;
                            parentCountEl.appendChild(newEl);
                            // parentCountEl.insertBefore(newEl,null);
                            // parentCountEl.parentNode.insertBefore(newEl, parentCountEl.nextSibling);
                        }
                        // console.log(divLength);
                    // }
                });
        // const deleted = ()=>{
        //     // parentCountEl.removeChild(parentCountEl.getElementsByClassName('row'))
        //     console.log(this)
        //}
        
////////////////////////mang-info---section-4/////////////////////////////
// document.getElementsByClassName('close').onclick = function(){
//     this.parentNode.parentNode.parentNode
//     .removeChild(this.parentNode.parentNode);
//     return false;
// };
function locatModal(){
    // loaction.href ='';
    location.href = "#myModal";
}
const btnAddMang = document.getElementById('btn-add-mang');
const parentCard = document.getElementById('card-newAdd');
btnAddMang.addEventListener('click',(e)=>{
    e.preventDefault();
    const newCard = document.createElement('div');
    newCard.classList.add('col-xl-4','col-md-6');
    newCard.innerHTML= `<div class="card">
    <div class="card-header">
        <div class="close"><img src="images/svgexport-6 (16) 1.svg" alt=""  
        data-bs-toggle="modal" data-bs-target="#exampleModal"></div>
        <div class="mt-3 mb-3" dir="rtl">
            <label class="visually-hidden" for="specificSizeSelect">Preference</label>
            <select class="form-select" id="specificSizeSelect">
                <option selected disabled>برجاء تحديد التصنيف</option>
                <option>اختر عدد المديرين</option>
                <option>اختر عدد المديرين</option> 
                <option>اختر عدد المديرين</option> 
            </select>
        </div>
        <div class="row">
            <div class="col-6">
                <div class=" g-3 justify-content-around" dir="rtl">
                    <div class="">
                      <label for="inputtext1" class="form-label">اسم المدير</label>
                      <input type="text" class="form-control" id="inputtext1" name = "manager" disabled>
                    </div>
                    <div class="">
                        <label for="inputtext2" class="form-label">جنسيه المساهم</label>
                        <input type="text" class="form-control" id="inputtext2" name = "manager_type" disabled>
                    </div>
                </div>
            </div>
            <div class="col-6 align-self-center">
                <div class="id"></div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <h6>صلاحيات المدير</h6>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1"name = "perm1" checked>
            <label class="form-check-label" for="flexCheckDefault1">
                صلاحية التوقيع امام البنوك وفتح حسابات بنكية والتعامل على حساب الشركة
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name = "perm2" id="flexCheckChecked2">
            <label class="form-check-label" for="flexCheckChecked2">
                صلاحية توقيع العقود بالنيابه عن الشركة
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name = "perm3" id="flexCheckChecked3">
            <label class="form-check-label" for="flexCheckChecked3">
                صلاحية التعامل امام الجهات الحكوميه بالنيابه عن الشركة
            </label>
          </div>
    </div>
    <div class="card-footer align-self-center">
        <div class="buttons">
            <button class="btn save" type="button">حفظ</button>
            <button class="btn edit" type="button">تعديل</button>
        </div>
    </div>
</div>`
parentCard.appendChild(newCard)
// console.log('dcds')

});
///////////////////////calender--section-5/////////////////////////////////

$(function() {

    // rome(inline_cal, { time: false });  
      rome(inline_cal, {time: false, inputFormat: 'MMMM DD, YYYY'}).on('data', function (value) {
        result.value = value;
      });
  
  });

  //////////////////////company participants
  (function(){

  })();