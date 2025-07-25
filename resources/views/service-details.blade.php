@extends('frontend.layouts.main')
@section('main-container')
<div class="bannergallery-section">
    <div class="gallery-slider d-flex">
           <div class="gallery-widget">
               <a href="frontend/img/gallery/gallery1/gallery-1.jpg" data-fancybox="gallery1">
                   <img class="img-fluid" alt="Image" src="frontend/img/gallery/gallery1/gallery-1.jpg">
               </a>
           </div>	
           <div class="gallery-widget">
               <a href="frontend/img/gallery/gallery1/gallery-2.jpg" data-fancybox="gallery1">
                   <img class="img-fluid" alt="Image" src="frontend/img/gallery/gallery1/gallery-2.jpg">
               </a>
           </div>								
           <div class="gallery-widget">
               <a href="frontend/img/gallery/gallery1/gallery-3.jpg" data-fancybox="gallery1">
                   <img class="img-fluid" alt="Image" src="frontend/img/gallery/gallery1/gallery-3.jpg">
               </a>
           </div>	
           <div class="gallery-widget">
               <a href="frontend/img/gallery/gallery1/gallery-4.jpg" data-fancybox="gallery1">
                   <img class="img-fluid" alt="Image" src="frontend/img/gallery/gallery1/gallery-4.jpg">
               </a>
           </div>			
           <div class="showphotos">
               <a href="frontend/img/gallery/gallery1/gallery-3.jpg" data-fancybox="gallery1">... Show Photos</a>
           </div>								
      </div>			
</div>		

<section class="details-description">
   <div class="container">
         <div class="about-details">
            <div class="about-headings">
                 <div class="author-img">
                      <img src="frontend/img/profiles/avatar-10.jpg" alt="authorimg">
                 </div>
                 <div class="authordetails">
                      <h5>Sleep In a Room in Apartment</h5>
                      <p>Luxury hotel in the heart of Blommsbury</p>
                      <div class="rating">
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fa-regular fa-star rating-color"></i>
                           <span class="d-inline-block average-rating"> 4.5 </span>
                      </div>
                 </div>
            </div>
            <div class="rate-details">
                <h2>$350</h2>
                <p>Fixed</p>
            </div>				  
         </div>
         <div class="descriptionlinks">
           <div class="row">
                 <div class="col-lg-9">
                     <ul>
                         <li><a href="javascript:void(0);"><i class="feather-map"></i> Get Directions</a></li>
                         <li><a href="javascript:void(0);"><img src="frontend/img/website.svg" alt="website">Website</a></li>
                         <li><a href="javascript:void(0);"><i class="feather-share-2"></i> share</a></li>
                         <li><a href="javascript:void(0);"><i class="fa-regular fa-comment-dots"></i> Write a review</a></li>
                         <li><a href="javascript:void(0);"><i class="feather-flag"></i> report</a></li>
                         <li><a href="javascript:void(0);"><i class="feather-heart"></i> Save</a></li>
                     </ul>
                 </div>
                 <div class="col-lg-3">
                     <div class="callnow">
                         <a href="contact.html"> <i class="feather-phone-call"></i>  Call Now</a>
                     </div>
                 </div>
            </div>
         </div>
   </div>		
</section>

<div class="details-main-wrapper listing-section ">	
   <div class="container">
       <div class="row">
           <div class="col-lg-9">                             					
               <div class="card ">
                   <div class="card-header">
                       <span class="bar-icon">
                       <span></span>
                       <span></span>
                       <span></span>
                       </span> 
                       <h4>Description</h4>
                   </div>
                   <div class="card-body">
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                       <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                   </div>
               </div>					
                       
               <div class="card ">
                   <div class="card-header">
                       <i class="feather-list"></i>
                       <h4>Listing Features</h4>
                   </div>
                   <div class="card-body">
                     <div class="lisiting-featues">
                       <div class="row">
                           <div class="featureslist d-flex align-items-center col-lg-4 col-md-4">
                               <div class="feature-img">
                                      <img src="frontend/img/featured/Feature-1.svg" alt="Room amenties" >
                               </div>
                               <div class="featues-info">
                                    <h6>Room <br> amenities</h6>
                               </div>
                           </div>
                           <div class="featureslist d-flex align-items-center col-lg-4 col-md-4">
                               <div class="feature-img">
                                 <img src="frontend/img/featured/Feature-2.svg" alt="Bathroom amenities" >
                               </div>
                               <div class="featues-info">
                                   <h6>Bathroom <br> amenities</h6>
                               </div>
                           </div>
                           <div class="featureslist d-flex align-items-center col-lg-4 col-md-4">
                               <div class="feature-img">
                                 <img src="frontend/img/featured/Feature-3.svg" alt="Media Technology" >
                               </div>
                               <div class="featues-info">
                                   <h6>Media & Technology <br> amenities</h6>
                               </div>
                           </div>
                           <div class="featureslist d-flex align-items-center col-lg-4 col-md-4">
                               <div class="feature-img">
                                 <img src="frontend/img/featured/Feature-4.svg" alt="Food Security" >
                               </div>
                               <div class="featues-info">
                                   <h6>Food & Security  <br> amenities</h6>
                                </div>
                           </div>
                           <div class="featureslist d-flex align-items-center col-lg-4 col-md-4">
                               <div class="feature-img">
                                 <img src="frontend/img/featured/Feature-5.svg" alt="Media Technology" >
                               </div>
                               <div class="featues-info">
                                   <h6>Services & Extra <br> amenities</h6>
                               </div>
                           </div>
                           <div class="featureslist d-flex align-items-center col-lg-4 col-md-4">
                               <div class="feature-img">
                                 <img src="frontend/img/featured/Feature-6.svg" alt="Media Technology">
                               </div>
                               <div class="featues-info">
                                    <h6>Outdoor & View <br> amenities</h6>
                               </div>
                           </div>
                           <div class="featureslist d-flex  access-feature align-items-center col-lg-4 col-md-4">
                               <div class="feature-img">
                                 <img src="frontend/img/featured/Feature-7.svg" alt="Media Technology">
                               </div>
                               <div class="featues-info">
                                   <h6>Accessibility <br> amenities</h6>
                               </div>
                           </div>
                           <div class="featureslist d-flex align-items-center access-feature col-lg-4 col-md-4">
                               <div class="feature-img">
                                 <img src="frontend/img/featured/Feature-8.svg" alt="Media Technology">
                               </div>
                               <div class="featues-info">
                                   <h6>Safety & Security<br> amenities</h6>
                               </div>
                           </div>
                           </div>
                       </div>	
                   </div>	
               </div>									
             					   
               <div class="card gallery-section ">
                   <div class="card-header ">
                       <img src="frontend/img/galleryicon.svg" alt="gallery">
                       <h4>Gallery</h4>
                   </div>
                   <div class="card-body">
                     <div class="gallery-content">
                       <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-3">
                               <div class="gallery-widget">
                                   <a href="frontend/img/gallery/gallery1/gallery-5.jpg" data-fancybox="gallery1">
                                   <img class="img-fluid" alt="Image" src="frontend/img/gallery/galleryimg-1.jpg">
                                   </a>
                               </div>								
                           </div>
                           <div class="col-lg-3 col-md-3 col-sm-3">
                               <div class="gallery-widget">
                                   <a href="frontend/img/gallery/gallery1/gallery-6.jpg" data-fancybox="gallery1">
                                   <img class="img-fluid" alt="Image" src="frontend/img/gallery/galleryimg-2.jpg">
                                   </a>											
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-3 col-sm-3">
                               <div class="gallery-widget">
                                   <a href="frontend/img/gallery/gallery1/gallery-8.jpg" data-fancybox="gallery1">
                                   <img class="img-fluid" alt="Image" src="frontend/img/gallery/galleryimg-3.jpg">
                                   </a>											
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-3 col-sm-3">
                               <div class="gallery-widget me-0">
                                   <a href="frontend/img/gallery/gallery1/gallery-11.jpg" data-fancybox="gallery1">
                                   <img class="img-fluid" alt="Image" src="frontend/img/gallery/galleryimg-11.jpg">
                                   </a>											
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-3 col-sm-3">
                               <div class="gallery-widget">
                                   <a href="frontend/img/gallery/gallery1/gallery-9.jpg" data-fancybox="gallery1">
                                   <img class="img-fluid" alt="Image" src="frontend/img/gallery/galleryimg-9.jpg">
                                   </a>											
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-3 col-sm-3">
                               <div class="gallery-widget">
                                   <a href="frontend/img/gallery/gallery1/gallery-10.jpg" data-fancybox="gallery1">
                                   <img class="img-fluid" alt="Image" src="frontend/img/gallery/galleryimg-10.jpg">
                                   </a>											
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-3 col-sm-3">
                               <div class="gallery-widget">
                                   <a href="frontend/img/gallery/gallery1/gallery-11.jpg" data-fancybox="gallery1">
                                   <img class="img-fluid" alt="Image" src="frontend/img/gallery/galleryimg-11.jpg">
                                   </a>											
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-3 col-sm-3">
                               <div class="gallery-widget me-0">
                                   <a href="frontend/img/gallery/gallery1/gallery-6.jpg" data-fancybox="gallery1">
                                   <img class="img-fluid" alt="Image" src="frontend/img/gallery/galleryimg-2.jpg">
                                   </a>											
                               </div>
                           </div>
                       </div>								
                     </div>									
                   </div>					
               </div>									
               <!--/Gallery Section-->
               
               <!--Ratings Section-->
               <div class="card ">
                   <div class="card-header  align-items-center">
                       <i class="feather-star"></i>
                       <h4>Ratings</h4>
                   </div>
                   <div class="card-body">
                       <div class="ratings-content">											
                           <div class="row">
                               <div class="col-lg-3">
                                 <div class="ratings-info">
                                    <p class="ratings-score"><span>4</span>/5</p>
                                   <p>OVERALL</p>
                                   <p> <i class="fas fa-star filled"></i>
                                       <i class="fas fa-star filled"></i>
                                       <i class="fas fa-star filled"></i>
                                       <i class="fas fa-star filled"></i>
                                       <i class="fa-regular fa-star"></i></p>
                                   <p>Based on Listing</p>
                                  </div>   
                               </div>
                               <div class="col-lg-9">
                                  <div class="ratings-table table-responsive">
                                    <table class="">
                                       <tr>
                                          <td class="star-ratings"><i class="fas fa-star filled"></i>
                                           <i class="fas fa-star filled"></i>
                                           <i class="fas fa-star filled"></i>
                                           <i class="fas fa-star filled"></i>
                                           <i class="fas fa-star filled"></i></td>
                                           <td class="scrore-width"><span> </span></td>
                                           <td> 0</td>														   
                                       </tr>
                                       <tr>
                                           <td class="star-ratings" ><i class="fas fa-star filled"></i>
                                               <i class="fas fa-star filled"></i>
                                               <i class="fas fa-star filled"></i>
                                               <i class="fas fa-star filled"></i>
                                               <i class="fa-regular fa-star rating-color"></i>
                                           <td class="scrore-width selected"><span> </span></td>
                                           <td> 1</td>														   
                                       </tr>
                                       <tr>
                                           <td class="star-ratings"><i class="fas fa-star filled"></i>
                                               <i class="fas fa-star filled"></i>
                                               <i class="fas fa-star filled"></i>
                                               <i class="fa-regular fa-star rating-color"></i>
                                               <i class="fa-regular fa-star rating-color"></i></td>
                                           <td class="scrore-width"><span> </span></td>
                                           <td> 0</td>														   
                                       </tr>
                                       <tr>
                                           <td class="star-ratings"><i class="fas fa-star filled"></i>
                                               <i class="fas fa-star filled"></i>
                                               <i class="fa-regular fa-star rating-color"></i>
                                               <i class="fa-regular fa-star rating-color"></i>
                                               <i class="fa-regular fa-star rating-color"></i>
                                           <td class="scrore-width"><span> </span></td>
                                           <td> 0</td>														   
                                       </tr>
                                       <tr>
                                           <td class="star-ratings"><i class="fas fa-star filled"></i>
                                               <i class="fa-regular fa-star rating-color"></i>
                                               <i class="fa-regular fa-star rating-color"></i>
                                               <i class="fa-regular fa-star rating-color"></i>
                                               <i class="fa-regular fa-star rating-color"></i></td>
                                           <td class="scrore-width"><span> </span></td>
                                           <td> 0</td>														   
                                       </tr>
                                   </table>
                                 </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>							
               <!--/Ratings Section-->
                   
               <!--Review  Section-->
               <div  class="card review-sec  mb-0">
                   <div class="card-header  align-items-center">
                       <i class="fa-regular fa-comment-dots"></i>
                       <h4>Write a Review</h4>
                   </div>
                   <div class="card-body">
                       <div class="review-list">
                           <ul class="">
                               <li class="review-box ">
                                   <div class="review-profile">
                                       <div class="review-img">
                                           <img src="frontend/img/profiles/avatar-11.jpg" class="img-fluid" alt="img">
                                       </div>															
                                   </div>
                                   <div class="review-details">
                                       <h6>Joseph</h6>
                                       <div class="rating">
                                           <div class="rating-star">
                                              <i class="fas fa-star filled"></i>
                                              <i class="fas fa-star filled"></i>
                                              <i class="fas fa-star filled"></i>
                                              <i class="fas fa-star filled"></i>
                                              <i class="fa-regular fa-star rating-overall"></i>
                                           </div>							        
                                           <div><i class="fa-sharp fa-solid fa-calendar-days"></i> 4 months ago</div>
                                           <div>by: Demo Test</div>
                                       </div>	
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>																	
                                           <div class="row">
                                               <div class="col-lg-3  col-md-3 col-sm-3">
                                                   <div class="review-gallery">
                                                      <a href="frontend/img/gallery/gallery1/gallery-6.jpg" data-fancybox="gallery">
                                                       <img class="img-fluid" alt="Image" src="frontend/img/gallery/galleryimg-1.jpg">
                                                     </a>
                                                   </div>
                                               </div>
                                               <div class="col-lg-3  col-md-3 col-sm-3">
                                                   <div class="review-gallery">
                                                      <a href="frontend/img/gallery/gallery1/gallery-5.jpg" data-fancybox="gallery">
                                                       <img class="img-fluid" alt="Image" src="frontend/img/gallery/galleryimg-2.jpg">
                                                     </a>
                                                   </div>
                                               </div>
                                               <div class="col-lg-3  col-md-3 col-sm-3">
                                                   <div class="review-gallery">
                                                      <a href="frontend/img/gallery/gallery1/gallery-8.jpg" data-fancybox="gallery">
                                                       <img class="img-fluid" alt="Image" src="frontend/img/gallery/galleryimg-3.jpg">
                                                     </a>
                                                   </div>
                                               </div>
                                               <div class="col-lg-3 col-md-3 col-sm-3">
                                                   <div class="review-gallery">
                                                      <a href="frontend/img/gallery/gallery1/gallery-9.jpg" data-fancybox="gallery">
                                                       <img class="img-fluid" alt="Image" src="frontend/img/gallery/galleryimg-9.jpg">
                                                     </a>
                                                   </div>
                                               </div>														
                                           </div>
                                       <div class="reply-box ">
                                           <p>Was This Review...? <a href="#" class="thumbsup"><i class="feather-thumbs-up"></i> Like </a>
                                              <a href="#" class="thumbsdown"><i class="feather-thumbs-down"></i> Dislike </a>
                                           </p>
                                           <a href="#" class="replylink"><i class="feather-corner-up-left"></i> Reply</a>													
                                       </div>
                                   </div>							
                               </li>
                               <li class="review-box">
                                   <div class="review-profile">
                                       <div class="review-img">
                                           <img src="frontend/img/profiles/avatar-02.jpg" class="img-fluid" alt="img">
                                       </div>															
                                   </div>
                                   <div class="review-details">
                                       <h6>Dev</h6>
                                       <div class="rating">
                                           <div class="rating-star">
                                              <i class="fas fa-star filled"></i>
                                              <i class="fas fa-star filled"></i>
                                              <i class="fas fa-star filled"></i>
                                              <i class="fas fa-star filled"></i>
                                              <i class="fa-regular fa-star rating-overall"></i>
                                           </div>							        
                                           <div><i class="fa-sharp fa-solid fa-calendar-days"></i> 4 months ago</div>
                                           <div>by: Demo Test</div>
                                       </div>		
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>																	
                                   </div>
                               </li>
                               <li class="review-box">
                                   <div class="review-profile">
                                       <div class="review-img">
                                           <img src="frontend/img/profiles/avatar-01.jpg" class="img-fluid" alt="img">
                                       </div>															
                                   </div>
                                   <div class="review-details">
                                       <h6>Johnson</h6>
                                       <div class="rating">
                                           <div class="rating-star">
                                              <i class="fas fa-star filled"></i>
                                              <i class="fas fa-star filled"></i>
                                              <i class="fas fa-star filled"></i>
                                              <i class="fas fa-star filled"></i>
                                              <i class="fa-regular fa-star rating-overall"></i>
                                           </div>							        
                                           <div><i class="fa-sharp fa-solid fa-calendar-days"></i> 4 months ago</div>
                                           <div>by: Demo Test</div>
                                       </div>		
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>																	
                                       <div class="reply-box ">
                                           <p>Was This Review...? <a href="#" class="thumbsup"><i class="feather-thumbs-up"></i> Like </a>
                                              <a href="#" class="thumbsdown"><i class="feather-thumbs-down"></i> Dislike </a>
                                           </p>
                                           <a href="#" class="replylink"><i class="feather-corner-up-left"></i> Reply</a>													
                                       </div>
                                   </div>
                               </li>
                               <li class="review-box feedbackbox mb-0">
                                   <div class="review-details">
                                      <h6>Leave Feedback About This</h6>
                                   </div>
                                   <div class="card-body">
                                       <form class="">
                                           <div class="row">
                                               <div class="col-lg-12 col-md-12">
                                                   <div class="form-set">
                                                       <input type="text" class="form-control" placeholder="Title">
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 col-md-6 col-12">
                                                   <div class="form-set">
                                                       <input type="text" class="form-control" placeholder="Name*" required>
                                                    </div>
                                               </div>
                                               <div class="col-lg-6 col-md-6 col-12">
                                                   <div class="form-set me-0">
                                                       <input type="email" class="form-control" placeholder="Email*" required>
                                                    </div>
                                               </div>
                                               <div class="col-lg-12 col-md-12">
                                                   <div class="form-set">
                                                       <textarea rows="4" class="form-control"  placeholder="Write a Review*" required></textarea>
                                                    </div>
                                               </div>
                                           </div>													
                                           <div class="reviewbox-rating">
                                               <p><span> Rating</span> 
                                                   <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                   <i class="fas fa-star filled"></i>
                                                   <i class="fas fa-star filled"></i>
                                                   <i class="fas fa-star filled"></i>
                                               </p>
                                           </div>
                                           <div class="submit-section">
                                               <button class="btn btn-primary submit-btn" type="submit"> Submit Review</button>
                                           </div>
                                       </form>
                                   </div>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>	
               <!--/Review Section-->	
                   
           </div>
           <div class="col-lg-3 theiaStickySidebar">
               <div class="rightsidebar">
                   <div class="card">
                    <h4><img  src="frontend/img/details-icon.svg" alt="details-icon"> Details</h4>
                    <ul>
                       <li>Contract <span>For Rent</span></li>
                       <li>Location <span>New York, USA</span></li>
                       <li>Year Built <span>1988</span></li>
                       <li>Rooms <span>3</span></li>
                       <li>Beds <span>4</span></li>
                       <li>Baths<span>8</span></li>
                       <li>Gadgets <span>6</span></li>
                       <li>Home Area <span>30sqft</span></li>
                       <li>Lot Dimensions <span>30*30*20 ft</span></li>
                       <li class="p-0">Lot Area <span>50 ft</span></li>
                    </ul>
                   </div>
                   <div class="card">
                       <h4><img src="frontend/img/breifcase.svg" alt=""> Business Info</h4>
                       <div class="map-details">
                         <div class="map-frame">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.2238528387797!2d-122.41637708468208!3d37.78479337975754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858090475dcdc3%3A0x417fdbbd16e076ed!2s484%20Ellis%20St%2C%20San%20Francisco%2C%20CA%2094102%2C%20USA!5e0!3m2!1sen!2sin!4v1669879954211!5m2!1sen!2sin" width="200" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div>							  
                         <ul class="info-list">
                           <li><i class="feather-map-pin"></i> 484, Ellis st, San Fransisco,<br>CS 94102, United States</li>
                           <li><i class="feather-phone-call"></i> + 62 8245 9875</li>
                           <li><i class="feather-mail"></i> <a href="https://listee.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0b787e7b7b64797f4b6762787f6e6e25686466">[email&#160;protected]</a></li>
                           <li><img src="frontend/img/website.svg" alt="website"> www.listee.com</li>
                           <li class="socialicons pb-0">
                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                           </li>
                         </ul>
                       </div>
                   </div>
                   <div class="card">
                       <h4><img src="frontend/img/statistic-icon.svg" alt="location"> Statisfic</h4>
                       <ul class="statistics-list">
                           <li><div class="statistic-details"><span class="icons"><i class="fa-regular fa-eye"></i></span>
                              Views </div><span class="text-end"> 453563</span></li>
                           <li><div class="statistic-details"><span class="icons"><i class="feather-star"></i></span>
                              Ratings </div><span class="text-end"> 153</span></li>
                           <li><div class="statistic-details"><span class="icons"><i class="feather-heart"></i></span>
                                Favuorites </div><span class="text-end"> 123</span></li>
                           <li class="mb-0"><div class="statistic-details"><span class="icons"><i class="feather-share-2"></i></span>
                                Shares </div><span class="text-end"> 50</span></li>
                       </ul>
                   </div>
                   <div class="card">
                       <h4> <i class="feather-user"></i> Author</h4>
                       <div class="sidebarauthor-details align-items-center">
                          <div class="sideauthor-img">
                            <img src="frontend/img/profiles/avatar-12.jpg" alt="author">
                          </div>
                          <div class="sideauthor-info">
                              <p class="authorname">Johnson</p>
                              <p >Member since Nov 24, 2017</p>
                          </div>
                       </div>
                   </div>
                   <div class="card mb-0">
                       <h4> <i class="feather-phone-call"></i> Contact Business</h4>
                            <form class="contactbusinessform">
                               <div class="form-set">
                                  <input type="text" class="form-control" placeholder="Name">
                               </div>
                               <div class="form-set">
                                  <input type="email" class="form-control" placeholder="Email Address">
                               </div>
                               <div class="form-set">
                                      <textarea rows="6" class="form-control"  placeholder="Message" ></textarea>
                               </div>
                               <div class="submit-section">
                                   <button class="btn btn-primary submit-btn" type="submit">Send Message</button>
                               </div>
                           </form>
                   </div>
               </div>
           </div>
       </div>
   </div>		
</div>		
@endsection