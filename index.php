<?php include "inc/header.php" ?>

    <section class="container my-3 text-center">
      <h1 class="display-4 py-4 font-weight-bold global-heading-col">যে সকল ক্লাসের জন্য আমরা পড়াই।</h1>
    </section>

    <div class="classess_con">
      <section class="container py-5 classess">
        <div class="row">
          <div class="col-md-4">
            <a href="class/6.php" class="m-4">
              <div class="cards text-center py-4 border border-warning  custom-shadow rounded text-white">
                <h1>Class 06</h1>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="class/7.php" class="m-4">
              <div class="cards text-center py-4 border border-warning  custom-shadow rounded text-white">
                <h1>Class 07</h1>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="class/8.php" class="m-4">
              <div class="cards text-center py-4 border border-warning  custom-shadow rounded text-white">
                <h1>Class 08</h1>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="class/9.php" class="m-4">
              <div class="cards text-center py-4 border border-warning  custom-shadow rounded text-white">
                <h1>Class 09</h1>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="class/10.php" class="m-4">
              <div class="cards text-center py-4 border border-warning  custom-shadow rounded text-white">
                <h1>Class 10</h1>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="class/11.php" class="m-4">
              <div class="cards text-center py-4 border border-warning  custom-shadow rounded text-white">
                <h1>Class 11</h1>
              </div>
            </a>
          </div>
        </div>
        <center class="pt-3"><a href="classess.php" class="mt-2 btn btn-logo-col btn-lg">আরও...</a></center>
      </section>
    </div>

    <section class="teachers py-5 bg-teac-sec" >
      <div class="container mt-4 ">
        <center><h1 class="global-heading-col">Most Recent Teachers</h1></center>
        <center><h5 class="global-heading-col">(Latest Teacher's)</h5></center>
      </div>
      <div class="container mt-5 px-5">
        <div class="row px-5 d-flex justify-content-center">
          <?php
              $que = "SELECT * FROM teachers WHERE t_permission = 'YES' ORDER BY t_id DESC LIMIT 4";
              $latestTea = mysqli_query($connection, $que);
              while ($row = mysqli_fetch_array($latestTea) ) {
                  $t_id             = $row['t_id'];
                  $t_fname          = $row['t_fname'];
                  $t_lname          = $row['t_lname'];
                  $t_ppic           = $row['t_ppic'];
          ?>
          <div class="col-md-3 teacher text-center">
            <center><img style="width: 70px; height: 60px;" src="admin/img/<?php echo $t_ppic; ?>" class="img-fluid d-block rounded-circle" > </center>
            <p class="pt-2"> <a href="admin/teacherprofile.php?tprovisit=<?php echo $t_id; ?>"><?php echo $t_fname.' '. $t_lname; ?></a> </p>
          </div>
          <?php 
            }
          ?>
        </div>
      </div>
      <center class="pt-3"><a href="admin/index.php" class="mt-2 btn btn-logo-col btn-lg">Registration As Teacher</a></center>
    </section>

    <section class="container mt-4">
      <h1 class="py-4 global-heading-col"> <u>FAQ </u></h1>

      <div class="faq">
        <div id="accordion">
          <div class="faq-sec mb-2">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <i class="fas fa-plus"></i>
                  কীভাবে টিচার রেজিস্ট্রেশন করবে?
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                টিচার রেজিস্ট্রেশন বাটনে ক্লিক করে খুব সহজে, যে কোনো টিচার তাদের ব্যাক্তিগত ইনফরমেশম  ও  ভেলিড ডকুমেন্ট দিয়ে ফর্ম ফিল আপ করে টিচার রেজিস্ট্রেশন করতে পারবে।
              </div>
            </div>
          </div>
          <div class="faq-sec mb-2">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <i class="fas fa-plus"></i>
                  কীভাবে পছন্দের টিচারের ক্লাসে এনরোল হব?
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                খুব সহজেই একজন ছাত্র/ছাত্রী তাদের পেমেন্ট ক্লিয়ার করে তাদের পছন্দের টিচারের প্রোফাইলে গিয়ে বা টিচার আইডি ব্যবহার করে তাদের পছন্দের টিচারের ক্লাসে এনরোল করতে পারবে।
              </div>
            </div>
          </div>
          <div class="faq-sec mb-2">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <i class="fas fa-plus"></i>
                  ক্লাস কীভাবে করব?
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                যে কোনো শিক্ষার্থী তাদের মোবাইল ফোন বা ল্যাপটপ ইউজ করে গুগল মিট, জুম App এর মাধ্যমে সরাসরি ক্লাস করতে পারবে, এই ক্ষেত্রে আমরা HD camera + Screen share + JamBoard ইউজ করব। প্রত্যেকটা ক্লাসের রেকর্ড ভিডিও আমরা শিক্ষার্থীদের দিব। যাতে করে অফলাইনেও ক্লাস করতে পারে।
              </div>
            </div>
          </div>
        </div>
      </div>
      <center class="pt-3"><a href="faq.php" class="mt-2 btn btn-logo-col btn-lg">আরও...</a></center>
    </section>
 
    <section class="teachers my-5 " >
      <div class="container mt-4 ">
        <center><h1 class="pt-4 global-heading-col">আমাদের কিছু কথা</h1></center>
      </div>
      <div class="container">
        <div class="text-center bg-light py-5  mx-auto p-3">
          <h4 >বিসমিল্লাহির রাহমানির রাহীম। শিক্ষাই জাতির মেরুদণ্ড।
শিক্ষা কোনো শিক্ষার্থীর উপর চাপিয়ে দেওয়ার বিষয় নয়, শিক্ষা সেটাই যা একজন শিক্ষার্থী  নিজের আগ্রহ, একাগ্রতা,পরিশ্রম, মনোযোগ ও অধ্যবসায় দিয়ে শিখে যা দেশ ও জাতির কল্যাণে আসে। বর্তমান বাংলাদেশের বিভিন্ন স্তরের শিক্ষার বিভিন্ন বিষয় বিবেচনা সাপেক্ষে এটি একটি যুগপোযোগী কর্ম পরিকল্পনা। বাংলাদেশ সহ পৃথিবীর বিভিন্ন দেশের অত্যন্ত প্রত্যন্ত অঞ্চল থেকে শুরু করে শহর নগরের সকল স্তরের শিক্ষক ও শিক্ষার্থীরা এই কর্ম পরিকল্পনার আওতাভুক্ত। এটি মূলত পাঠদান গ্রহনের একটি ডিজিটাল প্লাটফর্ম যেখানে প্রতিটি শিক্ষক পাবে পাঠদানের বিশাল শিক্ষার্থীর ভান্ডার ও প্রতিটি শিক্ষার্থী পাবে নিজের চাহিদা মতো শিক্ষক ও তার পুরোপুরি সাপোর্ট। এখানে থাকবে দরিদ্র শিক্ষার্থীদের জন্য শিক্ষক চ্যারিটি ও নতুন শিক্ষকদের  ক্যারিয়ার ডেভেলপমেন্টের যথাযথ সুযোগ। প্রতিটি শিক্ষার্থীর জন্য এখানে থাকবে সব ডিজিটাল কনটেন্ট। এখানে বিভিন্ন সুবিধার মধ্যে অন্যতম একটা বড় সুবিধা হল যে,  যে কোনো দুর্যোগ বা মহামারির মধ্যেও ঘরে বসেই শিক্ষক শিক্ষার্থীরা নিজেদের পাঠ দান গ্রহন কার্য সুস্থ্য স্বাভাবিক ভাবে পরিচালনা করতে পারবে। বর্তমান বাংলাদেশ সরকারের দেশ ও জাতি গঠনের শিক্ষা কেন্দ্রিক ভিশন মিশনের অন্যতম একটা বিশেষ সহায়ক প্লাটফর্ম হবে এটি।</h4>
        </div>
      </div>
    </section>


<?php include "inc/footer.php" ?>