@extends('includes.main')

@section('content')

<div class="section_banner">
	<div class="banner">
		<h4>Which colour is your study?</h4>
		 <video src="{{url('images/video.mp4')}}" autoplay loop muted>
		 	
		 </video>
		 <div class="progressmeter">
		 	
		 </div>
		 
		 <a href="#" class="discuss_button discuss_button_1"><span>Know Your study color<i class="fa fa-arrow-right"></i></span></a>
	</div>
</div>

<section class="ensure_career">
	<div class="container-fluid">
		 <h2 class="heading_e">Ensure Your career</h2>
		 <div class="row">
		<div class="swiper mySwiper">
	      <div class="swiper-wrapper">
	        <div class="swiper-slide">
	        	<div class="career_box">
		 		 	<div class="title_h">
		 		 		<span class="imgb"><img src="{{url('images/support.png')}}" alt="construction"></span>
		 		 		<h5> Construction, Mining, Fuel, Energy and Environment</h5>
		 		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 		 		tempor incididunt</p>
		 		 	</div>
		 		 	<span class="icon_hover"><img src="{{url('images/support.png')}}" alt="construction"></span>
		 		 </div>
	        </div>
	        <div class="swiper-slide">
	        		 <div class="career_box">
		 		 	<div class="title_h">
		 		 		<span class="imgb"><img src="{{url('images/art.png')}}" alt="entertainment"></span>
		 		 		<h5> Arts, Design, Entertainment, Media, Games & Sports</h5>
		 		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 		 		tempor incididunt</p>
		 		 	</div>
		 		 	<span class="icon_hover"><img src="{{('images/art.png')}}" alt="entertainment"></span>
		 		 </div>
	        </div>
	        <div class="swiper-slide">
	        	 <div class="career_box">
		 		 	<div class="title_h">
		 		 		<span class="imgb"><img src="{{url('images/online-banking.png')}}" alt="banking"></span>
		 		 		<h5> Banking, Insurance, Accountancy and Financial Services</h5>
		 		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 		 		tempor incididunt</p>
		 		 	</div>
		 		 	<span class="icon_hover"><img src="{{url('images/online-banking.png')}}" alt="banking"></span>
		 		 </div>
	        </div>
	        <div class="swiper-slide">
	        	 <div class="career_box">
		 		 	<div class="title_h">
		 		 		<span class="imgb"><img src="{{url('images/bar-chart.png')}}" alt="business"></span>
		 		 		<h5> Business, Management, HR, and Administrative Support</h5>
		 		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 		 		tempor incididunt</p>
		 		 	</div>
		 		 	<span class="icon_hover"><img src="{{url('images/bar-chart.png')}}" alt="business"></span>
		 		 </div>
	        </div>
	        <div class="swiper-slide">
	        	<div class="career_box">
		 		 	<div class="title_h">
		 		 		<span class="imgb"><img src="{{url('images/defence.png')}}" alt="defence"></span>
		 		 		<h5> Defence and Armed Forces</h5>
		 		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 		 		tempor incididunt</p>
		 		 	</div>
		 		 	<span class="icon_hover"><img src="{{url('images/defence.png')}}" alt="defence"></span>
		 		 </div>
	        </div>
	        <div class="swiper-slide">
	        	<div class="career_box">
		 		 	<div class="title_h">
		 		 		<span class="imgb"><img src="{{url('images/education.png')}}" alt="education"></span>
		 		 		<h5>Education, Training, Library and Career Counselling</h5>
		 		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 		 		tempor incididunt</p>
		 		 	</div>
		 		 	<span class="icon_hover"><img src="{{url('images/education.png')}}" alt="education"></span>
		 		 </div>
	        </div>
	        <div class="swiper-slide">
	        	 <div class="career_box">
		 		 	<div class="title_h">
		 		 		<span class="imgb"><img src="{{url('images/agriculture.png')}}" alt="agriculture"></span>
		 		 		<h5>Agriculture, Forestry, Fishing, Animal & Veterinary</h5>
		 		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 		 		tempor incididunt</p>
		 		 	</div>
		 		 	<span class="icon_hover"><img src="{{url('images/agriculture.png')}}" alt="agriculture"></span>
		 		 </div>
	        </div>
	        <div class="swiper-slide">
	        	 <div class="career_box">
		 		 	<div class="title_h">
		 		 		<span class="imgb"><img src="{{url('images/government.png')}}" alt="government"></span>
		 		 		<h5>Government and Public Administration</h5>
		 		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 		 		tempor incididunt</p>
		 		 	</div>
		 		 	<span class="icon_hover"><img src="{{url('images/government.png')}}" alt="government"></span>
		 		 </div>
	        </div>
	   
	      </div>
	      <div class="swiper-pagination"></div>
	    </div>
		 </div>
	</div>
	
</section>
<div class="section_ambition">
	<div class="container-fluid">
		<div class="ambition_heading"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 496 496" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path xmlns="http://www.w3.org/2000/svg" d="m480 45h-29v-29c0-8.836-7.163-16-16-16h-76c-8.837 0-16 7.164-16 16v29h-29c-8.837 0-16 7.164-16 16v43c0 4.418 3.582 8 8 8h182c4.418 0 8-3.582 8-8v-43c0-8.836-7.163-16-16-16zm-61 0h-44v-13h44zm77 107v24c0 8.836-7.163 16-16 16h-166c-8.837 0-16-7.164-16-16v-24c0-4.418 3.582-8 8-8h182c4.418 0 8 3.582 8 8zm0 328c0 8.836-7.164 16-16 16-6.559 0-457.848 0-464 0-8.836 0-16-7.164-16-16s7.164-16 16-16h25.182v-90.545c0-8.836 7.164-16 16-16h83.728c8.836 0 16 7.164 16 16v90.545h33.227v-157.773c0-8.836 7.164-16 16-16h83.728c8.836 0 16 7.164 16 16v157.773h33.227v-225c0-8.836 7.164-16 16-16h83.728c8.836 0 16 7.164 16 16v225h25.18c8.836 0 16 7.164 16 16zm-457.604-206.005c60.161-1.488 120.356-22.059 169.618-63.405 6.031 16.138 30.003 12.556 30.962-4.703l2-36c.557-10.021-8.165-18.091-18.118-16.744l-37 5c-17.035 2.303-18.851 26.315-2.389 31.192-42.608 34.228-94.101 51.389-145.864 52.669-8.834.219-15.818 7.557-15.6 16.391.219 8.871 7.6 15.824 16.391 15.6z" fill="#ef6922" data-original="#000000" style=""></path></g></svg></span><h4>4 steps from career ambition till achievement</h4></div>
		 <div class="row">
		 	 <div class="col-sm-12 col-md-6 col-lg-3">
		 	 	<div class="padding-50"></div>
		 	 	 <div class="content_box content_box_1">
		 	 	 	<h3>01</h3>
		 	 	 	<p>Let’s know your career aim. For example, if you want to be an Aeroplane pilot or an IAS officer, type “pilot” or "IAS" + your name and SMS/WhatsApp to 9212401007</p>
		 	 	 </div>
		 	 </div>
		 	 <div class="col-sm-12 col-md-6 col-lg-3">
		 	 	<div class="padding-50"></div>
		 	 	 <div class="content_box content_box_2">
		 	 	 	<h3>02</h3>
		 	 	 	<p>A Career Counsellor will interact with you to conduct an online psychometric assessment to know your aptitude, attitude, and ability.</p>
		 	 	 </div>
		 	 </div>
		 	 <div class="col-sm-12 col-md-6 col-lg-3">
		 	 	<div class="padding-50"></div>
		 	 	 <div class="content_box content_box_3">
		 	 	 	<h3>03</h3>
		 	 	 	<p>Also, the counsellor will assist you to create your career map, education pathways and study schedule.</p>
		 	 	 </div>
		 	 </div>
		 	 <div class="col-sm-12 col-md-6 col-lg-3">
		 	 	<div class="padding-50"></div>
		 	 	 <div class="content_box_">
		 	 	 	<h3>04</h3>
		 	 	 	<p>A team of subject experts will teach you online and the counsellor will manage your career from ambition till achievement.</p>
		 	 	 </div>
		 	 </div>
		 </div>
	</div>
</div>

<div class="section_discuss">
	<div class="container-fluid padding_50px">
		<div class="discuss_content">
			<div class="left_content">
				<p>We promise to make you "what you want to be <br>Get back your fee if you haven't achieved your career aim.</p>
				<a href="#" class="discuss_button"><span>DISCUSS YOUR CAREER AIM<i class="fa fa-arrow-right"></i></span></a>
			</div>
			
		</div>
		
	</div>
</div>
<div class="nice_education p-50px">
	<div class="container">
		<p class="education_p">Nice education is agile, convenient, and effective. Today, too many distractions prevent every child to develop a passion for learning. Our teachers are compassionate and provide motivation as well as a good learning experience.</p>
		<div class="elementor-widget-container">
			<h3 style="text-align: left; padding-top: 0; margin: 0;"><img src="{{url('images/book.png')}}" alt="book" width="40px" class="lazyloaded" data-ll-status="loaded"><noscript><img src="https://nicedu.org/wp-content/uploads/2021/05/book.png" width="40px" /></noscript> Nice education<span style="color: #888;"> Includes </span></h3>						
		</div>
		<div>
			<h3 class="detail">Detail</h3>
		</div>
      <ul class="detail_list">
      	<li><p> Online interactive classes.</p><span><img src="{{url('images/right.png')}}" alt="Online interactive classes."></span></li> 
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">Personalised study schedule because every student is different.</p><span><img src="{{url('images/right.png')}}" alt="Personalised study schedule"></span></li>
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">Course contents covering the complete syllabus.</p><span><img src="{{url('images/right.png')}}" alt="Course contents covering"></span></li>
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">Past classes recorded videos.</p><span><img src="{{url('images/right.png')}}" alt="Past classes recorded videos"></span></li>
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">Unlimited test series, progress analysis and reports.</p><span><img src="{{url('images/right.png')}}" alt="Unlimited test series"></span></li>
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">Upload doubt and get solutions.</p><span><img src="{{url('images/right.png')}}" alt="Upload doubt and get solutions"></span></li>
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">Learning by practice, applied approach to education.</p><span><img src="{{url('images/right.png')}}" alt="Learning by practice, applied approach to education"></span></li>
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">Flexible learning in terms of time, content, and delivery.</p><span><img src="{{url('images/right.png')}}" alt="Flexible learning in terms of time,"></span></li>
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">Students are safely connected with teachers and classmates to study and explore the futures together.</p><span><img src="{{url('images/right.png')}}" alt="Students are safely connected"></span></li>
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">Psychometric assessment of aptitude, attitude, and ability to find best fit career AIM.</p><span><img src="{{url('images/right.png')}}" alt="Psychometric assessment of aptitude"></span></li>
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">Career map with education & training pathways.</p><span><img src="{{url('images/right.png')}}" alt="Career map with education"></span></li>
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">Foundation and gradual preparation for the career and competitive exams</p><span><img src="{{url('images/right.png')}}" alt="Foundation and gradual"></span></li>
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">Counsellor assisted career development.</p><span><img src="{{url('images/right.png')}}" alt="Counsellor assisted career development"></span></li>
      	<li><p><img src="{{url('images/nice_education_img.png')}}" alt="Nice education is agile">You pay once your career aim is achieved.</p><span><img src="{{url('images/right.png')}}" alt="You pay once your career aim is achieved"></span></li>

      </ul>
      <p class="pa_2">We have created an innovative education model by designing an open study environment and a blend of experiential learning supported by state-of-the-art technology. These practices can improve problem-solving skills, SMAC intelligence, time management, virtual collaboration, creativity, critical thinking, emotional intelligence to develop into smart, healthy, and happy individuals.</p>
	</div>
</div>

<div class="quality_education">
	<div class="container">
		<h4 class="quality_education_heading"><img src="{{url('images/quality_education.png')}}" alt="Quality education now">Quality education now <span>is highly accessible and affordable</span></h4>
		<p class="pa_3">As per new education policy 5+3+3+4 pattern.</p>
	<table width="100%" class="subject">
		<thead>
			<tr class="table-header">
				<th ><span><img src="{{url('images/standard-school.png')}}" alt="all school boards"></span>Standard (all school boards)</th>
				<th><span><img src="{{url('images/all-subjects.png')}}" alt="all subjects"></span>All Subjects</th>
				<th><span><img src="{{url('images/online-class.png')}}" alt="all classes in a group"></span> All subjects, all classes in a group</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>LKG – KG – UKG – 1st – 2nd</td>
				<td>₹14,160 per year</td>
				<td>₹42,480 for 4 years</td>
			</tr>
			<tr>
				<td>3rd – 4th – 5th</td>
				<td>₹16,992 per year</td>
				<td>₹42,480 for 3 years</td>
			</tr>
			<tr>
				<td>6th – 7th – 8th</td>
				<td>₹19,824 per year</td>
				<td>₹49,560 for 3 years</td>
			</tr>
			<tr>
				<td>9th – 10th</td>
				<td>₹25,488 per year</td>
				<td>₹38,232 for 2 years</td>
			</tr>
			<tr>
				<td>11th – 12th</td>
				<td>₹32,568 per year</td>
				<td>₹48,852 for 2 years</td>
			</tr>
			<tr>
			<td colspan="2">
			<div class="td-content-wrapper"><div><span>We inspire and prepare students to succeed in their careers.</span></div>
		   </div>
			</td>
			<td colspan="">
			<div class="td-content-wrapper">
			 <a href="">Buy Now</a>
			</div>
			</td>

		 </tr>
		</tbody>

	</table>
	</div>
</div>

<div class="section_democlass">
	<div class="top_">
		<div class="con">
			 <div class="icon2_">
			 	<span>
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"  x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg"><path d="m57 59h1c1.654 0 3-1.346 3-3v-16c0-1.654-1.346-3-3-3h-10v-3.906c0-2.262-.881-4.389-2.481-5.989-1.325-1.325-3.079-2.183-4.938-2.415l-2.829-.354c-.999-.125-1.752-.978-1.752-1.984v-.615c.991-.693 1.79-1.636 2.315-2.736h.685c2.206 0 4-1.794 4-4 0-1-.382-1.904-.99-2.605.639-1.141.99-2.41.99-3.733 0-4.225-3.437-7.663-7.663-7.663h-6.675c-4.224 0-7.662 3.438-7.662 7.663 0 1.323.351 2.593.99 3.732-.608.701-.99 1.605-.99 2.605 0 2.206 1.794 4 4 4h.685c.525 1.1 1.324 2.043 2.315 2.736v.509c0 .99-.725 1.839-1.687 1.974-1.304.184-2.525.464-3.63.832-2.026.675-4.003 2.152-5.211 3.173-.098-.102-.196-.205-.303-.3l-6.719-5.972c-.689-.614-1.578-.952-2.502-.952h-.18c-2.078 0-3.768 1.69-3.768 3.768 0 1.066.455 2.087 1.247 2.8l7.243 6.519c1.371 1.233 3.142 1.913 4.987 1.913 1.151 0 2.303-.272 3.333-.787l1.19-.595v2.382h-16c-1.654 0-3 1.346-3 3v16c0 1.654 1.346 3 3 3h1v2h-6v2h62v-2h-6zm-22-6h6v.382l-1.236.618c-1.249.625-2.146 1.714-2.539 3h-1.225c-.551 0-1-.448-1-1zm4 5.472c0-1.144.635-2.171 1.658-2.683l.342-.171v3.382h12v-3.382l.342.171c1.023.512 1.658 1.539 1.658 2.683v2.528h-16zm4-1.472v-10c0-2.206 1.794-4 4-4s4 1.794 4 4v10zm15 0h-1.224c-.393-1.286-1.29-2.375-2.539-3l-1.237-.618v-.382h6v3c0 .552-.449 1-1 1zm1-17v11h-6v-4c0-3.309-2.691-6-6-6s-6 2.691-6 6v4h-6v-11c0-.552.449-1 1-1h22c.551 0 1 .448 1 1zm-23.55-14.578c.081.067.168.126.254.187l-.468 4.213-1.883-1.883zm3.55-8.422h-.08c.047-.328.08-.66.08-1v-3c1.103 0 2 .897 2 2s-.897 2-2 2zm-14 0c-1.103 0-2-.897-2-2s.897-2 2-2v3c0 .34.033.672.08 1zm.084-6h-.084c-.483 0-.939.099-1.368.257-.413-.799-.632-1.681-.632-2.594 0-3.123 2.54-5.663 5.663-5.663h6.675c3.122 0 5.662 2.54 5.662 5.663 0 .913-.219 1.795-.632 2.594-.428-.158-.885-.257-1.368-.257v-2h-1.528c-2.772 0-5.547-.655-8.025-1.895l-.37-.185-.659.22c-1.759.586-3.016 2.082-3.334 3.86zm1.916 5v-4.117c0-1.251.771-2.362 1.933-2.804 2.515 1.19 5.285 1.848 8.067 1.915v5.006c0 2.757-2.243 5-5 5s-5-2.243-5-5zm5 7c.707 0 1.388-.107 2.032-.303.031.36.099.711.22 1.039l-2.252 2.702-2.28-2.736c.125-.319.198-.658.238-1.008.647.198 1.332.306 2.042.306zm-3.497 2.365 2.144 2.573-1.883 1.883-.479-4.309c.072-.049.15-.092.218-.147zm-22.503-.597c0-.975.793-1.768 1.768-1.768h.18c.434 0 .851.159 1.174.447l1.597 1.42-2.598 2.598-1.536-1.383c-.372-.335-.585-.814-.585-1.314zm16.707 5.525-1.414 1.414c.221.221.395.485.515.771l-1.892.946c-1.962.981-4.458.642-6.087-.823l-4.219-3.797 2.607-2.607 3.624 3.221c.737.656 1.159 1.597 1.159 2.582h2c0-.724-.15-1.431-.422-2.087 1.056-.911 2.919-2.358 4.738-2.964.921-.307 1.948-.539 3.038-.705l.881 7.935 4.765-4.764 4.764 4.764.871-7.841 2.698.337c1.42.178 2.76.833 3.772 1.845 1.222 1.221 1.895 2.846 1.895 4.574v3.906h-4v-3.586c0-.635.258-1.258.707-1.707l-1.414-1.414c-.834.833-1.293 1.942-1.293 3.121v3.586h-4c-1.654 0-3 1.346-3 3v16c0 1.654 1.346 3 3 3h1v2h-10v-2h1c1.654 0 3-1.346 3-3v-16c0-1.654-1.346-3-3-3h-4v-3.586c0-1.179-.459-2.288-1.293-3.121zm-8.471 21.943c-.809-1.617-1.236-3.427-1.236-5.236 0-2.206 1.794-4 4-4s4 1.794 4 4c0 1.809-.427 3.619-1.236 5.236l-.382.764h-4.764zm7.317.895c.021-.042.035-.088.056-.131h7.391v3c0 .552-.449 1-1 1h-1.383c-.539-1.323-1.62-2.389-3.036-2.861l-2.171-.723zm-15.553-14.131h22c.551 0 1 .448 1 1v11h-6.622c.396-1.297.622-2.646.622-4 0-3.309-2.691-6-6-6s-6 2.691-6 6c0 1.354.226 2.703.622 4h-6.622v-11c0-.552.449-1 1-1zm-1 17v-3h7.391c.021.043.035.088.056.131l.143.285-2.172.723c-1.416.473-2.496 1.538-3.035 2.861h-1.383c-.551 0-1-.448-1-1zm4 2.883c0-1.293.824-2.437 2.051-2.847l3.11-1.036h5.679l3.109 1.036c1.227.41 2.051 1.554 2.051 2.847v2.117h-16z" fill="#444444" data-original="#000000" style=""></path><path d="m49 11h10v2h-10z" fill="#444444" data-original="#000000" style=""></path><path d="m49 15h10v2h-10z" fill="#444444" data-original="#000000" style=""></path><path d="m60 7h-12c-1.654 0-3 1.346-3 3v8c0 1.654 1.346 3 3 3h1v1.586c0 1.331 1.083 2.414 2.414 2.414.645 0 1.251-.251 1.707-.707l3.293-3.293h3.586c1.654 0 3-1.346 3-3v-8c0-1.654-1.346-3-3-3zm1 11c0 .551-.449 1-1 1h-4.414l-3.879 3.879c-.238.238-.707.045-.707-.293v-3.586h-3c-.551 0-1-.449-1-1v-8c0-.551.449-1 1-1h12c.551 0 1 .449 1 1z" fill="#444444" data-original="#000000" style=""></path></g></g></svg>				</span>
			 </div>
			 <h3>Take a demo class free
<br>and without obligation!</h3>
<a href="#" class="discuss_button"><span>TAKE DEMO<i class="fa fa-arrow-right"></i></span></a>
		</div>
		<div class="con">
			 
		</div>
	</div>
	<div class="bottom_">
		<div class="empty"><p>Subscribe to our Newsletter</p></div>
		<form class="myform">
			<input type="text" name="name" placeholder="Name">
			<input type="text" name="number" placeholder="Number">
			<input type="email" name="email" placeholder="Email Address *">
			<button type="button">Subscribe!</button>
		</form>
	</div>
</div>
<button class="scrollup">
    <i class="fa fa-chevron-up"></i>
</button>
<a href="https://api.whatsapp.com/send?phone=919650326621" class="wh">
	<span class="zoom"><i class="fa fa-whatsapp"></i></span>
</a>
@endsection