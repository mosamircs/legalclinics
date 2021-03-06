
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Legal Clinic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/rome.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="autocomplete.css">
</head>
<body>
        <!-- welcom page-->
        <section id="welcome-page" class="layer">
             <form action="register.php" id="register_user" class="needs-validation" novalidate>
                <div class="logo-box">
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <div class="image">
                                <img src="images/logo.svg" alt="the legal clinic logo" srcset="" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="welcome-content" id="main-div">
                    <div class="container">
                        <div class="form-check form-switch" style="display: none;">
                            <div class="switch">
                                <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
                                <label for="language-toggle"></label>
                                <span class="on">AR</span>
                                <span class="off">EN</span>
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6  col-md-6 col-sm-12 my-auto mx-auto">
                                <div class="welcome-msg text-center">
                                    <h2>مرحبا بك</h2>
                                    <h3>ابدا شركتك الان</h3>
                                    <p>نسهل عليك دمج عملك على الإنترنت. تضمن عمليتنا خطوة بخطوة حصولك على شركة دقيقة وفي الوقت المناسب. ما عليك سوى اتباع نموذجنا البسيط واختيار نوع الشركة الذي تريده. يستغرق الأمر بضع دقائق فقط من وقتك لتأسيس شركتك عبر الإنترنت!</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 welcome-form" style="text-align: -webkit-right;">
                                <div class="card  mb-3">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="header-img">
                                                    <img src="images/Login Image.svg" alt="login image" srcset="" width="100%">
                                                </div>
                                            </div>
                                            <div class="col-6 my-auto">
                                                <div class="header-content">
                                                    <h3>مرحبا بك</h3>
                                                    <p>برجاء تسجيل الدخول</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">اسم المستخدم</label>
                                                <input type="text" class="form-control" id="username" name = "username" dir="rtl">
                                                
                                                <div id="error-userName" class="error">يجب ادخال اسم المستخدم</div>
                                            </div>
                                            <div class="mb-3">
                                              <label for="email" class="form-label">البريد الالكتروني</label>
                                              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name = "email" placeholder="example@ex.com">
                                              <div id="error-email" class="error">يجب ادخال بريد الكترونى صالح</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone" class="form-label" >رقم الهاتف</label> 
                                                    <input id="phone" type="tel" class="form-control" name = "phone" inputmode="tel">
                                                    <div id="error-phone" class="error">يجب ادخال رقم هاتف صالح</div>
                                                </div>
                                            <button type="button" class="btn btn-primary" id="btnSubmit" onclick="changeLayer(1)">التالي</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="turn-en">
                        <div class="cir-4">
                            <button type="button"></button>
                            <!-- <img src="images/eng.svg" alt="" srcset=""> -->
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- <div class="page-wrapper"> -->
        <!--company types-->
        <div class="container pro-bar" id="pro-bar">
            <!-- operations progress bar -->
            <div class="progress-container" dir="rtl">
                <div class="progress" id="progress"></div>
                <div class="circle active"><span>1</span></div>
                <div class="circle"><span>2</span></div>
                <div class="circle"><span>3</span></div>
                <div class="circle"><span>4</span></div>
                <div class="circle"><span>5</span></div>
            </div>
            <div class="operations-container" dir="rtl">
                <div class="type">
                    <p>نوع الشركه</p>
                </div>
                <div class="type">
                    <p>بيانات الشركه</p>
                </div>
                <div class="type">
                    <p>بيانات المساهمين</p>
                </div>
                <div class="type">
                    <p>بيانات المديرين</p>
                </div>
                <div class="type">
                    <p>الموعد النهائي</p>
                </div>
            </div>
        </div>
        <section>
            <form action="thanks.php" method="POST" id = "dataSubmit" class="needs-validation" novalidate>
                <input type="hidden" name="userid" id="userid" value="">
                <div class="main-content" id="main" >
                    <div class="container">
                        <!-- layer--1 money& people -->
                        <div  class="layer">
                            <div class="buttons-tog"> 
                                <button class="btn selected" id="btn-money" type="button">شركات الاموال</button>
                                <button class="btn notseleted" id="btn-people" type="button">شركات الأشخاص</button>
                            </div>
                            <div  id="choice-Money">
                                <div class="pref text-center">
                                    <p>هو مزيج من الأصول أو الموارد التي يمكن للشركة الاستفادة منها في تمويل أعمالها<br>
                                        .ينتج رأس مال الشركات من تمويل الديون وحقوق الملكية</p>
                                </div>
                                <div class="choice d-flex justify-content-center flex-column align-items-end">
                                    <div class="form-check d-flex flex-row-reverse mt-3">
                                        <div>
                                            <input class="form-check-input" type="radio" name="company_type" id="exampleRadios1" value="option1" onclick="check1()"  required></div>
                                        <div class="mr-3">
                                            <label class="form-check-label" for="exampleRadios1">
                                                <h2>شركة ذات مسئولية محدودة</h2>
                                                <p>,ذات المسئولية المحدودة هي التي تتكون من عدد من الشركاء لا يزيد علي الخمسين<br>
                                                    ,ولا يكون كل منهم مسئولاً إلا بقدر حصته في رأس المال<br>
                                                     ,ولا يجوز تأسيس هذه الشركة أو زيادة رأس مالها أو الاقتراض لحسابها عن طريق الاكتتاب العام
                                                     <br>.كما لا يجوز لها إصدار أسهم أو سندات قابلة للتداول</p>
                                            </label>
                                        </div>
                                        <div class="mr-8"><button class="btn down" id="down-1" type="button" onclick="download('Incorporation of a Limited Liability Company - Legal Clinic');" >تنزيل ملف الشروط</button></div> 
                                    </div>
                                      <div class="form-check d-flex flex-row-reverse mt-3">
                                        <div><input class="form-check-input" type="radio" name="company_type" id="exampleRadios2" value="option2" onclick="check2()" required></div>
                                        <div class="mr-3">
                                            <label class="form-check-label" for="exampleRadios1">
                                                <h2>شركة مساهمة مصري</h2>
                                                <p>.شركة ينقسم رأس مالها إلى أسهم متساوية القيمة يمكن تداولها على الوجه المبين في القانون<br>
                                                    وتقتصر مسئولية المساهم على أداء قيمة الأسهم التي اكتتب فيها ولا يسأل عن ديون الشركة <br>إلا في حدود ما اكتتب فيه من أسهم
                                                    ويكون للشركةاسم تجاري يشتق من الغرض من إنشائها<br>.ويجوز أن يتضمن الاسم التجاري للشركة اسما أو لقبا لواحد أو أكثر من مؤسسيها 
                                                    </p>
                                            </label>
                                        </div>
                                        <div class="mr-8"><button class="btn down"  id="down-2" style="display: none;" type="button" onclick="download('Joint Stock Incorporation');" >تنزيل ملف الشروط</button></div>
                                    </div>
                                      <div class="form-check d-flex flex-row-reverse mt-3">
                                        <div><input class="form-check-input" type="radio" name="company_type" id="exampleRadios3" value="option3" onclick="check3()" required></div>
                                        <div class="mr-3">
                                            <label class="form-check-label" for="exampleRadios1">
                                                <h2>شركة شخص واحد ذات مسئولية محدودة</h2>
                                                <p>شركة يمتلك رأسمالها بالكامل شخص واحد، سواء كان طبيعيا أو اعتباريا وذلك بما لا يتعارض مع أغراضها <br>
                                                    .ولا يسأل مؤسس الشركة عن التزاماتها إلا في حدود رأس المال المخصص لها<br> 
                                                    وتتخذ الشركة اسما خاصا لها يستمد من أغراضها أو من اسم مؤسسها، 
                                                    <br>ويجب أن يتبع اسمها بما يفيد أنها شركة من شرك الشخص الواحد ذات مسئولية محدودة،<br> 
                                                    ويوضع على مركزها الرئيس وفروعها – إن وجدت – وفي جميع مكاتباتها.
                                                    </p>
                                            </label>
                                        </div>
                                        <div class="mr-8"><button class="btn down"  id="down-3" style="display: none;" type="button" onclick="download('OPC requirements');" >تنزيل ملف الشروط</button></div>
                                    </div>
                                    <div class="invalid-feedback">يجب اختيار شركه</div>
                                </div>
                            </div>
                            <div  id="choice-people" style="display: none;">
                                    <div class="pref mt-2 mb-2 text-center">
                                        <p>يتكون من شخصين أو أكثر يجمعون مواردهم لتكوين شركة ويوافقون على مشاركة المخاطر والأرباح والخسائر </p>
                                    </div>
                                    <div class="choice d-flex justify-content-center flex-column align-items-end">
                                        <div class="form-check d-flex flex-row-reverse mt-3">
                                            <div><input class="form-check-input" type="radio" name="company_type" id="exampleRadios4" value="option4" onclick="check4()"  required></div>
                                            <div class="mr-3">
                                                <label class="form-check-label" for="exampleRadios4">
                                                    <h2>المنشاة الفردية</h2>
                                                    <p>هي نوع من المشاريع<br> يملكها ويديرها شخص واحد .ولا يوجد فيها تمييز قانوني بين المالك والكيان التجاري </p>
                                                </label>
                                            </div>
                                            <div class="mr-8"><button class="btn down" id="down-4" type="button" onclick="download('Sole Entity');" >تنزيل ملف الشروط</button></div> 
                                        </div>
                                          <div class="form-check d-flex flex-row-reverse mt-3">
                                            <div><input class="form-check-input" type="radio" name="company_type" id="exampleRadios5" value="option5" onclick="check5()" required></div>
                                            <div class="mr-3">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    <h2>شركة التضامن</h2>
                                                    <p>الشركة التي يعقدها اثنان أو أكثر بقصد الاتجـار على وجه الشركة بينهم بعنوان مخصوص <br>يكون اسما لها، الشركاء فيها متضامنون لجميع تعهـداتها ولـو لـم يحصل وضع الإمضاء عليها إلا من أحدهم <br>.إنما يـشترط أن يكـون هـذا الإمضاء بعنوان الشركة</p>
                                                </label>
                                            </div>
                                            <div class="mr-8"><button class="btn down"  id="down-5" style="display: none;" type="button" onclick="download('General partnership');" >تنزيل ملف الشروط</button></div>
                                        </div>
                                          <div class="form-check d-flex flex-row-reverse mt-3">
                                            <div><input class="form-check-input" type="radio" name="company_type" id="exampleRadios6" value="option6" onclick="check6()" required></div>
                                            <div class="mr-3">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    <h2>شركة التوصية البسيطة</h2>
                                                    <p>شركة التوصية البسيطة هي الشركة التي تعقد بين شريك واحد أو أكثر مسئولين ومتضامنين <br>.وبين شريك واحد أو أكثر يكونون أصحاب أموال وخارجين عن الإدارة ويسمون موصين</p>
                                                </label>
                                            </div>
                                            <div class="invalid-feedback">يجب اختيار شركه</div>
                                            <div class="mr-8"><button class="btn down"  id="down-6" style="display: none;" type="button" onclick="download('Limited Partnership');" >تنزيل ملف الشروط</button></div>
                                        </div>
                                        </div>
                            </div>
                        </div>
                        <!-- layer--2 chose name -->
                        <div  class="layer">
                            <div class="comp-name pt-4">
                                <h3>اقترح اسم لشركتك</h3>
                                <div id="form-in" dir="rtl">
                                    <div class="row g-3 justify-content-evenly pt-3" id="parent-el">
                                        <div class="col-md-4">
                                          <label for="inputtext1" class="form-label">الاقتراح الاول</label>
                                          <input type="text" class="form-control lay2" id="inputtext1" name="company_name[]" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputtext2" class="form-label">الاقتراح الثانى</label>
                                            <input type="text" class="form-control lay2" id="inputtext2" name="company_name[]" required>
                                          </div>
                                        <div class="col-md-4 align-self-end text-center" >
                                            <button class="btn btn-add" id="btn-add-sug" type="button">اضافه اقتراحات</button>
                                            <!-- <button class="btn btn-outline-danger" id="btn-delete-sug">حذف اقتراحات</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comp-info pt-4">
                                <h3>معلومات اساسيه</h3>
                                <div class="form-in" dir="rtl">
                                    <div class="row g-3 justify-content-start pt-3">
                                        <div class="col-md-4">
                                          <label for="floatingTextarea" class="form-label">نشاط الشركه</label>
                                          <!-- <input type="text" class="form-control"  required> -->
                                          <textarea class="form-control lay2" placeholder="نشاط الشركه"  name="company_activity" id="floatingTextarea" required></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="floatingTextarea2" class="form-label">عنوان الشركه</label>
                                            <!-- <input type="text" class="form-control" height="72px"  aria-label="Large" aria-describedby="inputGroup-sizing-sm" required> -->
                                            <textarea class="form-control lay2" placeholder="عنوان الشركه" id="floatingTextarea2" name="company_address"  required></textarea>
                                        </div>
                                    </div>
                                    <div class="row g-3 justify-content-start pt-3 pb-3">
                                        <div class="col-md-4">
                                          <label for="inputtext3" class="form-label">قيمه رأس المال</label>
                                          <input type="text" class="form-control lay2" id="inputtext3"  name="capital_value" required ></input>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputtext4" class="form-label" style="display: none;" id="arrowValue">قيمه السهم</label>   <!--لو شركة مساهمة display=inline-block-->
                                            <label for="inputtext4" class="form-label" id="classValue" >قيمه الحصه</label>
                                            <input type="text" class="form-control lay2" id="inputtext4" name="capital_share" required ></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- layer--3 parts info-->
                        <div  class="layer">
                            <div class="count">
                                <div class="col-sm-3" dir="rtl">
                                    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                                    <select class="form-select" id="specificSizeSelect">
                                        <option selected disabled>اختر عدد المديرين</option>
                                        <option  disabled >اختر عدد المساهمين</option>
                                    </select>
                                    <!-- <div class="invalid-feedback">يجب اختيار عدد المديرين</div> -->
                                  </div>
                            </div>
                            <div class="row g-3 justify-content-around pt-3" dir="rtl">
                                <div class="col-md-3">
                                  <label for="inputtext1" class="form-label" style="display: none;" id="partName">اسم المساهم</label>  <!--لو شركة مساهمة display=inline-block-->
                                  <label for="inputtext1" class="form-label" id="mangName">اسم المدير</label>
                                  <input type="text" class="form-control lay3" id="inputtext1" name="shareholder_name[]" >
                                </div>
                                <div class="col-md-3">
                                    <label for="inputtext2" class="form-label" style="display: none;">جنسيه المساهم</label>
                                  <label for="inputtext1" class="form-label">جنسيه المدير</label>
                                    <input type="text" class="form-control lay3" id="inputtext2" name="shareholder_nationality[]" >
                                </div>
                                <div class="col-md-3">
                                    <label for="inputtext6" class="form-label" style="display: none;">نسبه المساهمه</label>
                                  <label for="inputtext1" class="form-label">نسبه المدير</label>
                                    <input type="text" class="form-control lay3" id="inputtext6" name="shareholder_percentage[]" >
                                </div>
                                    <div class="col-md-5 mb-3">
                                        <label for="formFileMultiple" class="form-label">اضافه البطاقه الشخصية</label>
                                        <input class="form-control lay3" type="file" id="formFileMultiple" name="personal_id[]" multiple>
                                      </div>
                                    <div class="col-md-3 x-last align-self-center">
                                        <button class="btn btn-outline-danger" type="reset" style="display: none;">حذف المساهم</button><!--لو شركة مساهمة display=inline-block-->
                                        <button class="btn btn-outline-danger" type="reset">حذف المدير</button>
                                    </div>
                                    <hr>
                            </div>
                            <div  id="part-form">
                                
                            </div>
                        </div>
                        <!-- layer---4 mangers names -->
                        <div  class="layer">
                            <div class="mang-names pt-4">
                                <div class="row g-3 justify-content-center" dir="rtl">
                                    <div class="col-md-6">
                                      <label for="inputtextAdd" class="form-label" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" >ادخل اسماء المديرين</label>
                                      <input type="text" class="form-control" id="gettinghint" autocomplete="additional-name" >
                                    </div>
                                    <div class="col-3 align-self-end" style="text-align: center;">
                                        <button class="btn bttn-add" style="width: 10rem;" id="btn-add-mang" type="button">اضافه</button>
                                    </div>
                                </div>
                            </div>
                            <div class="mang-details pt-5 pb-5" dir="rtl">
                                <div class="row" id="card-newAdd">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="close">
                                                    <img src="images/svgexport-6 (16) 1.svg" alt="" 
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                </div>
                                                <!-- Modal HTML -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" dir="rtl">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 0;">
                                                          <h5 class="modal-title" id="exampleModalLabel">حذف المدير</h5>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin:0;"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                          هل انت متاكد من انك تريد حذف العضو؟؟
                                                        </div>
                                                        <div class="modal-footer" style="flex-wrap: nowrap; justify-content: space-evenly;border-top: 0;">
                                                          <button type="button" class="btn no" data-bs-dismiss="modal" 
                                                          style="color: #000086; border:1px solid #000086;">لا</button>
                                                          <button type="button" class="btn yes" 
                                                          style="width: auto; color: #FF0000;border:1px solid #FF0000;" >نعم</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                <!--modal end-->
                                                <div class="mt-3 mb-3" dir="rtl"> 
                                                    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                                                    <select class="form-select" id="specificSizeSelect" novalidate>
                                                        <option selected disabled>برجاء تحديد التصنيف</option>
                                                        <option  >اختر عدد المديرين</option>
                                                        <option  >اختر عدد المديرين</option> 
                                                        <option  >اختر عدد المديرين</option> 
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class=" g-3 justify-content-around" dir="rtl">
                                                            <div class="">
                                                              <label for="inputtext1" class="form-label">اسم المدير</label>
                                                              <input type="text" class="form-control" id="inputtext1" name = "manager"  novalidate>
                                                            </div>
                                                            <div class="">
                                                                <label for="inputtext2" class="form-label">جنسيه المساهم</label>
                                                                <input type="text" class="form-control" id="inputtext2"  name = "manager_type"  novalidate>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" name = "perm1" novalidate>
                                                    <label class="form-check-label" for="flexCheckDefault1">
                                                        صلاحية التوقيع امام البنوك وفتح حسابات بنكية والتعامل على حساب الشركة
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" name = "perm2"  novalidate>
                                                    <label class="form-check-label" for="flexCheckChecked2">
                                                        صلاحية توقيع العقود بالنيابه عن الشركة
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3" name = "perm3"  novalidate>
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
                                        </div>
                                    </div>
                                    <!-- <div class="col-xl-4 col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="close"><img src="images/svgexport-6 (16) 1.svg" alt=""  data-bs-toggle="modal" data-bs-target="#exampleModal"></div>
                                                <div class="mt-3 mb-3" dir="rtl">
                                                    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                                                    <select class="form-select" id="specificSizeSelect">
                                                        <option selected disabled>برجاء تحديد التصنيف</option>
                                                        <option>رئيس مجلس اداره</option>
                                                        <option>عضو مجلس اداره</option> 
                                                        <option>عضو منتدب</option> 
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class=" g-3 justify-content-around" dir="rtl">
                                                            <div class="">
                                                              <label for="inputtext1" class="form-label">اسم المدير</label>
                                                              <input type="text" class="form-control" id="inputtext1" disabled>
                                                            </div>
                                                            <div class="">
                                                                <label for="inputtext2" class="form-label">جنسيه المساهم</label>
                                                                <input type="text" class="form-control" id="inputtext2" disabled>
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
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" required>
                                                    <label class="form-check-label" for="flexCheckDefault4">
                                                        صلاحية التوقيع امام البنوك وفتح حسابات بنكية والتعامل على حساب الشركة
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5" required>
                                                    <label class="form-check-label" for="flexCheckChecked5">
                                                        صلاحية توقيع العقود بالنيابه عن الشركة
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked6" required>
                                                    <label class="form-check-label" for="flexCheckChecked6">
                                                        صلاحية التعامل امام الجهات الحكوميه بالنيابه عن الشركة
                                                    </label>
                                                  </div>
                                                  <div class="invalid-feedback">
                                                    يجب تحديد صلاحية واحده على الاقل
                                                  </div>
                                            </div>
                                            <div class="card-footer  align-self-center">
                                                <div class="">
                                                    <button class="btn save" type="button">حفظ</button>
                                                    <button class="btn edit" type="button">تعديل</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="close"><img src="images/svgexport-6 (16) 1.svg" alt=""  data-bs-toggle="modal" data-bs-target="#exampleModal"></div>
                                                <div class="mt-3 mb-3" dir="rtl">
                                                    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                                                    <select class="form-select" id="specificSizeSelect" required>
                                                        <option selected disabled>برجاء تحديد التصنيف</option>
                                                        <option>رئيس مجلس اداره</option>
                                                        <option>عضو مجلس اداره</option> 
                                                        <option>عضو منتدب</option> 
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class=" g-3 justify-content-around" dir="rtl">
                                                            <div class="">
                                                              <label for="inputtext1" class="form-label">اسم المدير</label>
                                                              <input type="text" class="form-control" id="inputtext1" required>
                                                            </div>
                                                            <div class="">
                                                                <label for="inputtext2" class="form-label">جنسيه المساهم</label>
                                                                <input type="text" class="form-control" id="inputtext2" required >
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
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7" required>
                                                    <label class="form-check-label" for="flexCheckDefault7">
                                                        صلاحية التوقيع امام البنوك وفتح حسابات بنكية والتعامل على حساب الشركة
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked8" required>
                                                    <label class="form-check-label" for="flexCheckChecked8">
                                                        صلاحية توقيع العقود بالنيابه عن الشركة
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked9" required>
                                                    <label class="form-check-label" for="flexCheckChecked9">
                                                        صلاحية التعامل امام الجهات الحكوميه بالنيابه عن الشركة
                                                    </label>
                                                  </div>
                                            </div>
                                            <div class="card-footer  align-self-center">
                                                <div class="">
                                                    <button class="btn save" type="button">حفظ</button>
                                                    <button class="btn edit" type="button">تعديل</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- layer---5 calender-->
                        <div class="layer">
                            <div class="d-flex justify-content-center">
                                <div class="down-paper mt-5 text-center">
                                    <button class="btn btn-down-paper"><img src="images/Vector (1).svg" onclick = "download_docx('incorporation-poa-amended')" >الحصول علي التوكيل الرسمي</button>
                                        <h6 class="pt-3 sec">برجاء تحديد موعد لتوقيع التوكيل</h6>
                                        <div>
                                        <input type="text" class="form-control mx-auto mb-3" name = "signdate" id="result" placeholder="Select date" disabled="" required>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="inline_cal"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <p class="sec pb-4 pt-4">المواعيد متاحة من الساعة 9:00 صباحًا حتى 1:00 ظهرًا</p>
                                </div>
                            </div>
                        </div>
                        <!-- buttons change-layers-->
                         <div id="but-chose">
                          <div class="btn-chose d-flex justify-content-center pb-3 pt-3">
                              <button class="btn next mr-3" id="next-1" type="button"  name = "btsubmit" onclick="changeLayer(1)">التالي</button>
                              <button class="btn pre " id="prev-1" type="button" onclick="changeLayer(-1)">السابق</button>
                          </div>
                         </div>
                    </div>
                </div>
            </form>
        </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/js/intlTelInput.min.js" integrity="sha512-Po9nSdYOcWIcoADdRjkAbRYPpR8OHjxzA/3RDUERZcDewTLzRTxbG4bUX7Sr7lVEcO3wTCzphdOBWgNFKVmxaA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/rome.js"></script>
    <!-- <script src="js/main-2 (1).js"></script> -->
    <script src="js/main.js"></script>  
    <script>
        //download files.pdf
         function download(filename) {
            setTimeout(function () {
                DownloadFile(`${filename}.pdf`);
            }, 1000);
        };
        function download_docx(filename) {
            setTimeout(function () {
                DownloadFile(`${filename}.docx`);
            }, 1000);
        };
        function DownloadFile(fileName) {
            //Set the File URL.
            var url = "files/" + fileName;
 
            //Create XMLHTTP Request.
            var req = new XMLHttpRequest();
            req.open("GET", url, true);
            req.responseType = "blob";
            req.onload = function () {
                //Convert the Byte Data to BLOB object.
                var blob = new Blob([req.response], { type: "application/octetstream" });
 
                //Check the Browser type and download the File.
                var isIE = false || !!document.documentMode;
                if (isIE) {
                    window.navigator.msSaveBlob(blob, fileName);
                } else {
                    var url = window.URL || window.webkitURL;
                    link = url.createObjectURL(blob);
                    var a = document.createElement("a");
                    a.setAttribute("download", fileName);
                    a.setAttribute("href", link);
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                }
            };
            req.send();
        };
</script> 
<script>
    $(document).on('click','#btnSubmit',function(e){
        
        e.preventDefault();
        
        var serialized_data = $("#register_user").serialize(); 

        $.ajax({
            url: 'register.php',
            type: 'post',
            data: serialized_data,
            success:function(response){
                console.log(response);
              document.getElementById("userid").value = response.id;
            }
        });
    });
    $(document).on('focus','#gettinghint',function(e){
        $.ajax({
            url: 'gettinghint.php',
            type: 'GET',
            // data: serialized_data,
            success:function(response){
                console.log(response);
                var result = [];
                for(var i = 0; i < response.length; i++){
                    result.push(response[i].name);
                }
                console.log("succcess");
            }
        });
    });
</script>

<script src="js/autocomplete.js">
    
</script>
<script>
    autocomplete(document.getElementById("myInput"), countries);
</script> 
</body>