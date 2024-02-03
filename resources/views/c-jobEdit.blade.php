<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('../node_modules/swiper/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('build/style.css')}}">
  <title>ایجاد بلاگ</title>
  <link rel="icon" type="image/x-icon" href="{{asset('../assets/images/favicon.ico')}}">

</head>

<body class="font-YekanBakh-Regular text-sm">


  <!--header -->

  @include('c-header')

  <!--endheader-->


  <section class="px-4 mb-24 min-height-50">
    <div class="container mx-auto max-w-screen-xl">

      <div class="lightGreen2 mt-16 p-6 rounded-lg ">
        <form action="{{ route('cmsjob.editsave',$editjob->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="text-base text-gray-700 sm:text-lg leading-8 flex flex-col gap-6">
            <input required name="title" value="{{$editjob->title	}}" type="text" placeholder="نام شغل" class="input w-full  focus:outline-none placeholder:text-sm" />
            <input required name="Description" value="{{$editjob->Description	}}" type="text" placeholder=" نوع همکاری" class="input w-full  focus:outline-none placeholder:text-sm" />
            <div class="flex flex-col gap-2 text-sm">
              <lable for="poster">تخصص‌های لازم</lable>
              <div class="flex">
                <input type="text" id="Expertise" class="input w-full  focus:outline-none placeholder:text-sm" /> <span onclick="newElement('Expertise')" class="addBtn">افزودن</span>
              </div>
              <ul id="myULExpertise" class="flex gap-4 dir-l flex-wrap">
                @foreach($experiense as $ex)
                <li onclick="deleteFunction(this, 'Expertise')" class="cli" id="see"><span>{{$ex->expertiseDescription}}</span><span class="closel">×</span></li>
                @endforeach
              </ul>
            </div>

            <div class="flex flex-col gap-2 text-sm">
              <lable for="poster">مهارت‌های فردی</lable>
              <div class="flex">
                <input type="text" id="Skill" class="input w-full  focus:outline-none placeholder:text-sm" /> <span onclick="newElement('Skill')" class="addBtn">افزودن</span>
              </div>
              <ul id="myULSkill" class="flex gap-4 dir-l flex-wrap">
                @foreach($skills as $skill)

                <li onclick="deleteFunction(this, 'Skill')" class="cli"><span>{{$skill->skillsDescription}}</span><span class="closel">×</span></li>
                @endforeach
              </ul>

            </div>
          </div>
          <input name="expertise" type="text" id="ExpertiseArr" class="hidden">
          <input name="skills" type="text" id="SkillArr" class="hidden">

          <button class="btn mt-5 bg-green px-7 text-white  text-sm text-center" type="submit">ثبت شغل</button>
        </form>
      </div>

    </div>
  </section>
  @if(session('message'))
  <div style="box-shadow: 0px 0px 22px 0px rgba(66, 68, 90, 1);" class="alert alert-success success-message fixed top-5 w-80 bg-white p-4 rounded-md flex gap-1 justify-between items-center slide-left">
    <p class="font-bold">{{ session('message') }}</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
      <linearGradient id="I9GV0SozQFknxHSR6DCx5a" x1="9.858" x2="38.142" y1="9.858" y2="38.142" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#21ad64" />
        <stop offset="1" stop-color="#088242" />
      </linearGradient>
      <path fill="url(#I9GV0SozQFknxHSR6DCx5a)" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z" />
      <path d="M32.172,16.172L22,26.344l-5.172-5.172c-0.781-0.781-2.047-0.781-2.828,0l-1.414,1.414	c-0.781,0.781-0.781,2.047,0,2.828l8,8c0.781,0.781,2.047,0.781,2.828,0l13-13c0.781-0.781,0.781-2.047,0-2.828L35,16.172	C34.219,15.391,32.953,15.391,32.172,16.172z" opacity=".05" />
      <path d="M20.939,33.061l-8-8c-0.586-0.586-0.586-1.536,0-2.121l1.414-1.414c0.586-0.586,1.536-0.586,2.121,0	L22,27.051l10.525-10.525c0.586-0.586,1.536-0.586,2.121,0l1.414,1.414c0.586,0.586,0.586,1.536,0,2.121l-13,13	C22.475,33.646,21.525,33.646,20.939,33.061z" opacity=".07" />
      <path fill="#fff" d="M21.293,32.707l-8-8c-0.391-0.391-0.391-1.024,0-1.414l1.414-1.414c0.391-0.391,1.024-0.391,1.414,0	L22,27.758l10.879-10.879c0.391-0.391,1.024-0.391,1.414,0l1.414,1.414c0.391,0.391,0.391,1.024,0,1.414l-13,13	C22.317,33.098,21.683,33.098,21.293,32.707z" />
    </svg>


  </div>
  @endif




  <script src="{{asset('../node_modules/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('../src/js/main.js')}}"></script>
  <script>
    // Create a "close" button and append it to each list item
    let arrsObj = {
      "ExpertiseArr": [],
      "SkillArr": [],

    }

    // Create a new list item when clicking on the "Add" button
    function newElement(inp) {
      var li = document.createElement("li");
      var inputValue = document.getElementById(inp).value;
      const arr = arrsObj[inp + "Arr"]
      arr.push(inputValue)
      arrsObj[inp + "Arr"] = arr
      document.querySelector("#" + inp + "Arr").value = arr.join(",")
      var t = document.createTextNode(inputValue);
      const spanValue = document.createElement("span")
      spanValue.appendChild(t)
      li.className = "cli";
      li.appendChild(spanValue);
      if (inputValue === '') {
        alert("یچی باید بنویسی!");
      } else {
        document.getElementById(`myUL${inp}`).appendChild(li);
      }
      document.getElementById(inp).value = "";

      var span = document.createElement("SPAN");
      var txt = document.createTextNode("\u00D7");
      span.className = "closel";
      span.appendChild(txt);
      li.appendChild(span);
      li.onclick = function() {
        this.remove()
        let arr = arrsObj[inp + "Arr"]
        let index = arr.indexOf(inputValue)
        if (index !== -1) {
          arr.splice(index, 1);
        }

        document.querySelector("#" + inp + "Arr").value = arr.join(",")
        arrsObj[inp + "Arr"] = arr
      }

    }

    function deleteFunction(element, inp) {
      element.parentNode.removeChild(element);
      let arr = arrsObj[inp + "Arr"]
      let index = arr.indexOf(element.firstElementChild.textContent)
      if (index !== -1) {
        arr.splice(index, 1);
      }

      document.querySelector("#" + inp + "Arr").value = arr.join(",")
      arrsObj[inp + "Arr"] = arr
    }

    const clis = Array.from(document.getElementsByClassName("cli"))
    clis.map((ele) => {
      if (ele.parentElement.id.includes("Expertise")) {
        let arr = arrsObj["ExpertiseArr"]

        arr.push(ele.firstElementChild.textContent)
        document.querySelector("#ExpertiseArr").value = arr.join(",")
        arrsObj["ExpertiseArr"] = arr
      } else if (ele.parentElement.id.includes("Skill")) {
        let arr = arrsObj["SkillArr"]

        arr.push(ele.firstElementChild.textContent)
        document.querySelector("#SkillArr").value = arr.join(",")
        arrsObj["SkillArr"] = arr
      }
    })
  </script>
  <script>
    setTimeout(() => {
      document.querySelector(".alert").style.display = "none"
    }, 2000);
  </script>
</body>

</html>