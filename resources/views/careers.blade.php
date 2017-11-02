@extends('layouts.app')

@section('content')
        <!-- Page Content-->
      <main class="page-content">
        <!-- Classic Breadcrumbs-->
        <section class="breadcrumb-classic">
          <div class="rd-parallax">
            <div data-speed="0.25" data-type="media" data-url="{{ URL::asset('public/res/images/breadcrumbs-parallax-06.jpg') }}" class="rd-parallax-layer"></div>
            <div data-speed="0" data-type="html" class="rd-parallax-layer section-top-75 section-md-top-150 section-lg-top-260">
              <div class="shell">
                <ul class="list-breadcrumb">
                  <li><a href="index.html">home</a></li>
                  <li>Careers
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section class="section-75 section-md-100 section-lg-150">
          <div class="shell text-sm-left">
            <h1>Careers</h1>
            <div class="range offset-top-40">
              <div class="cell-sm-7 cell-md-6">
                <h6>Great work takes great people. At Constructo, our teams are the best. How do we keep the best? We make Constructo a rewarding place to work by offering benefits that go beyond the industry standard.</h6>
                <p>Constructo was built on tradition, integrity, and trust. Those same values were handed down over our long history and remain the framework for how we do business. When you work at Constructo, you work alongside men and women who share these beliefs — that is something you can count on.</p>
              </div>
              <div class="cell-sm-5 cell-md-preffix-1 cell-md-4 cell-lg-preffix-2 cell-lg-3"><a href="#" class="btn btn-default">Get started now with us</a></div>
            </div>
            <div class="bg-table bg-table-well">
              <div class="range range-sm-center">
                <div class="col-xl-10">
                  <h2>Working at Constructo</h2>
                  <div class="range offset-top-20">
                    <div class="cell-sm-6">
                      <p class="inset-lg-right-30">When talented people join our team, they become more than just employees — they become Constructo family members. Because we are 100% employee owned, each of us has a stake in Constructo’s success. We know that our actions directly impact our customers and our bottom line.</p>
                    </div>
                    <div class="cell-sm-6">
                      <p class="inset-lg-right-30">That is why we successfully complete every aspect of our work as a team – from estimating the details of a new project to placing thousands of yards of concrete. We teach each other and learn from each other to get the job done and get it done right.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="range">
              <div class="cell-md-8 cell-lg-6">
                <h2>Current opportunities</h2>
                <p>Our diverse capabilities provide employees the ability to work on projects of all sizes and types — from a small dorm renovation in Maine to a major treatment plant expansion in Georgia. Whether you want to estimate a project, create schedules, or transform drawings to reality, we provide opportunities in the office and in the field to suit a wide range of interests and specialties.</p>
                <p>We are looking for dedicated employees. Are you ready for a career that is anything but average? This might be the place for you.</p>
              </div>
            </div>
            <div class="range">
              <div class="cell-xs-12">
                <h2>Rewards and benefits</h2>
              </div>
              <div class="cell-sm-6 offset-top-40">
                <ul class="list list-xl">
                  <li>
                    <h5>Health and Wellness</h5>
                    <p class="inset-sm-right-70">Constructo offers all its employees extensive healthcare and wellness benefits throughout a year.</p>
                  </li>
                  <li>
                    <h5>Time Off / Paid Leave</h5>
                    <p class="inset-sm-right-70">If you require some time off or need to look after your relative without losing your salary, it is possible if you are working at Constructo.</p>
                  </li>
                </ul>
              </div>
              <div class="cell-sm-6 offset-top-40">
                <ul class="list list-xl">
                  <li>
                    <h5>Retirement and Financial Protection</h5>
                    <p class="inset-sm-right-70">We provide financial and social protection to all our team members, and with us you can be sure you will have a well-provided retirement.</p>
                  </li>
                  <li>
                    <h5>Employee Development</h5>
                    <p class="inset-sm-right-70">We encourage our employees to develop and improve their skills so that they could benefit from their work at our company.</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="range">
              <div class="cell-md-8 cell-lg-6">
                <h2>Hiring process</h2>
                <ol class="list list-index list-xl">
                  <li>In order to be considered for employment at Constructo, applicants must meet all of the minimum position requirements related to education/training, certification and experience.</li>
                  <li>If found suitable, HR Department prepares and issues the letter of appointment to the candidate. After the candidate accepts the offer, further proceedings are carried out towards satisfying the statutory requirements.</li>
                  <li>We conduct an induction program for all our new employees within their first week of employment. It is a combination of general information about the Company as well as specifics regarding the employee’s job role.</li>
                </ol>
              </div>
            </div>
            <div class="bg-table bg-table-well">
              <div class="range range-sm-center">
                <div class="col-xl-10">
                  <h2>Recruitment FAQ</h2>
                  <div class="range offset-top-30">
                    <div class="cell-sm-6">
                      <div class="inset-lg-right-30 inset-xl-right-40">
                        <h5 class="text-regular font-default text-spacing-0">Where can I find Constructo’s current list of open positions?</h5>
                        <p>A list of open positions will be available in our new online job application facility which will be launched soon. In the meantime, if you are interested in working for us, please submit your CV to info@demolink.org and we will contact you.</p>
                      </div>
                    </div>
                    <div class="cell-sm-6">
                      <div class="inset-lg-right-30">
                        <h5 class="text-regular font-default text-spacing-0">How long will it take to receive an update after an interview?</h5>
                        <p>Our HR Department will call you within a week of attending the interview regarding the status of your application. Unsuccessful candidates will receive a regret letter through email. You can read more info about it on our website.</p>
                      </div>
                    </div>
                    <div class="cell-xs-12 offset-top-40"><a href="#" class="link-custom">Read more questions</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    @endsection