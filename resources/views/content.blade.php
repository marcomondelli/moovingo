<div>

<div class="container-advertise" id="stars">
    <div>
        <span>Sell from €1.500</span>
    </div>
    <div>
        <span>Advertise on</span> <img :src="daft" alt="daft"><img :src="myhome" alt="myhome">
    </div>
    <div class="stars-align"  >
    <span >5 Star Experience</span> <img :src="stars" alt="stars" >
    </div>
</div>

    <div style="background-color:#f8f8f8" >
    <h3 style="text-align:center; padding-top:4vw;">How Much Can I save?</h3>   
        <div class="box-price">
        
        
        <p>Selling Price</p><br>
        <form class="form-range">
           
            <input type="range" name="foo" min="50000" max="5000000" step="10000" value="1000000" style="width: 100%">
            <output for="foo" onforminput="value = foo.valueAsNumber;"></output>
        </form>
        <p>Estate Agent Fee</p><br>
        <form class="form-range">
           
           <input type="range" name="foo" min="0" max="3" step="0.1" value="1.5" style="width: 100%">
           <output for="foo" onforminput="value = foo.valueAsNumber;"></output>
           
       </form>
       <span>Estate Agent Fee</span><span style="margin-left:22vw">Moovingo</span>

        <div class="total-save">
            <span style="margin-left:5vw; font-size:1.4vw;">You Save<span>
            <span id="total"></span>
        </div>
        <span class="fees-agent">Fees inclusive of marketing viewing and VAT</span>

    </div>
    <br>
</div>



<div>
        <div class="work-title">
            <h3>How The Perfect People Works</h3>
            <h6>With Moovingo it's you and us.</h6>
        </div>

        <div class="container-sales-work" id="works">
            <div class="box-sales-work">
                <div><img :src="calendar" alt="calendar icon"></div>
                <div><p>1. Book Valuation</p>
                    No obligation onsite valuation. Arrange a time and date and your local propriety expert ad they will provide an accurate valuation and tell you about Moovingo. It takes 2mins to books.
                </div>
            </div>
            <div class="box-sales-work">
                <div><img :src="people" alt="people icon"></div>
                <div>
                    <p>2. Instruct Moovingo</p>
                    For as little as €1.500, your local propriety expert will provide their expertise we begin preparing your propriety for the market. Including arranging professional photography & floor plans and getting your proprety to market including Daft, MyHome and other property portals.
                </div>
            </div>

            <div class="box-sales-work">
                <div><img :src="hands" alt="hand icon"></div>
                <div>
                    <p>3. Personal Service</p>
                    Your personal local expert can manage viewings to negotiation and closing. Consistent support, personal expertise and unconditional customer focus characterize our team.
                </div>
            </div>
            <div class="box-sales-work">
                <div><img :src="key" alt="key icon"></div>
                <div>
                    <p>4. Instant Viewings, Feedback & Offers</p>
                    Our easy to use technology allows you to stay connected & makes it easier and quicker for everything to happen. Moovingo's easy to use website creates the greatest possible transparency, efficiency and trust across the sales process.
                </div>
            </div>

            <div class="box-sales-work">
                <div><img :src="euro" alt="euro icon"></div>
                <div>
                    <p>5. Sell for the Highest Price</p>
                    Putting your home in the best light and targeting the correct audience. We use highly innovative marketing facilities and classic marketing channels to optimise exposure and generate the highest offers. Our agents and team are motivated by 5 star surveys, which we will ask you to complete on close.
                </div>
            </div>
            <div class="box-sales-work">
                <div><img :src="faq" alt="faq icon"></div>
                <div>
                    <p>6. Full Support</p>
                    Consistent support, personal expertise and unconditional customer focues characterize our service concept. Our agents are certified experts with local knowledge and experience.
                </div>
            </div>

           
        </div>
    </div>

   
    <div class="moovingo-maximize" id="maximize">
     <h3>How Does Moovingo maximize de the sale price & simplify a sale?</h3>
       
     <div class="expert"><h5 style="color:#12d66f">Local Property Expert</h5>
            Can take care of everything,<br> advise throughout and available<br>7 days a week.
            <br>
                <img :src="peopleGreen" alt="person green icon" width="15%">
    
    </div>

        <div class="buyers">
                <h5 style="color:#d67d12">Buyers</h5>
                    The ability to book viewings,<br>make offers and agree sales<br> 24/7 means buyers will have a <br> better customer experience too.
           <br>
                <img :src="peopleOrange" alt="people orange icon" width="70%">
        </div>

            
            <div class="seller">
                <h5 style="color:#128bd6">Sellers</h5>
                Manage your availability, collect<br> feedback, receive instant<br>updates and offerts as they<br>come in
                <br>
                <img :src="peopleBlue" alt="people blue icon" width="70%">
            </div>
       

            
            <div>
                <img :src="phone" alt="phone icon" id="phone-icon">
            </div>
            
    </div>

    <div id="traditional">
        <h3 class="work-title">Moovingo Vs Traditional Agent</h3>
        <div style="border-bottom: 1px solid #ccc">
            <h3 class="work-title">Fees</h3>
            <div class="trad-agent">
                <div>
                    Fixed fee inclusive of VAT and marketing, no hidden extras. Can be paid up front or later.
                </div>
                <div>
                    <img :src="pig" alt="pig icon">
                </div>
                <div>
                    Change a percentage of the sales price (typically 1% to 2.5%) + VAT + marketing costs.
                </div>
            </div>
        </div>
        <div style="border-bottom: 1px solid #ccc">
            <h3 class="work-title">Digital Marketing</h3>
            <div class="trad-agent">
                <div>
                    Aswell as advertising on Daft, MyHome & other channels, we implement digital marketing campaigns to target relevant audiences. Think social & mobile.
                </div>
                <div>
                    <img :src="presentation" alt="presentation icon">
                </div>
                <div>
                    Not all advertise on both Daft & MyHome and the majority have been slow to embrace the power of social and online marketing.
                </div>
            </div>
        </div>
        <div style="border-bottom: 1px solid #ccc">
            <h3 class="work-title">Speed</h3>
            <div class="trad-agent">
                <div>
                    Online dashboard that keeps everything up to date and moving
                </div>
                <div>
                    <img :src="speed" alt="speed icon">
                </div>
                <div>
                    Seller is reliant on their agent for updates during office hours and often information is dropped
                </div>
            </div>
        </div>
        <div style="border-bottom: 1px solid #ccc">
            <h3 class="work-title">Buyer Experience</h3>
            <div class="trad-agent">
                <div>
                    Over 70% of property search activity occurs outsde office hours. Our website allows buyers to instantly book viewings, ask questions and place offers instantly.
                </div>
                <div>
                    <img :src="cart" alt="cart icon">
                </div>
                <div>
                    Buyers have no way of instantly booking a viewing or placing an offer. They must chase & work to the agent schedule.
                </div>
            </div>
        </div>
        <div style="border-bottom: 1px solid #ccc">
            <h3 class="work-title">Cost Efficiency</h3>
            <div class="trad-agent">
                <div>
                    Model based on one central headquarters, proven technology and experienced local property experts.
                </div>
                <div>
                    <img :src="percentage" alt="percentage icon">
                </div>
                <div>
                    Occupy expensive retail unit locations that brin little value to the seller.
                </div>
            </div>
        </div>
        <div style="border-bottom: 1px solid #ccc">
            <h3 class="work-title">Communication</h3>
            <div class="trad-agent">
                <div>
                    Onlic dashboard that provides direct feedback, questions, and offers, from buyers, giving you an accurate insight of how your property is performing.
                </div>
                <div>
                    <img :src="speaker" alt="speaker icon">
                </div>
                <div>
                    Feedback and information si often lost or not fully passed to the seller, similarly you must wait for updates from the agent in relation to offers.
                </div>
            </div>
        </div>
        <div style="border-bottom: 1px solid #ccc">
            <h3 class="work-title">Calendar</h3>
            <div class="trad-agent">
                <div>
                    Website allows you to updates properties availability in real time, this syncs with out agents calendar and buyers can book in real time online. Simple.
                </div>
                <div>
                    <img :src="bigCalendar" alt="calendar icon">
                </div>
                <div>
                    Require agent to cal, email, call, email... to coordinate everyones diaries.
                </div>
            </div>
        </div>
        <div style="border-bottom: 1px solid #ccc">
            <h3 class="work-title">Professional Photos & Floorplans</h3>
            <div class="trad-agent">
                <div>
                    Professional photographers & floor plans included as part of your fixed fee, capturing your property in its best light.
                </div>
                <div>
                    <img :src="picture" alt="picture icon">
                </div>
                <div>
                    Many agents take the photos themselves using their mobile or personal camera and do not always provide a floor plan service.
                </div>
            </div>
        </div>
    </div>
    

    <div style="background-color:#f8f8f8; padding-bottom: 2vw;">
    <h3 class="work-title">Featured in</h3>
        <div class="container-advertise" id="featured">

            <div>
                <center><img :src="irishtimes" alt="irish times logo" width="60%"></center>
            </div>
            <div>
                <center><img :src="sundaytimes" alt="sunday times logo" width="70%"></center>
            </div>
            <div   >
                <center><img :src="indipendent" alt="indipendent.ie logo" width="60%"></center>
            </div>
        </div>
    </div>


    <h5 class="social-title">Connect With Us</h5>
    <div class="container-social-logos" id="social">
        <a href="#" target="_blank"><img :src="facebook" alt="facebook logo" width="70%"></a>
        <a href="#" target="_blank"><img :src="twitter" alt="twitter logo" width="70%"></a>
        <a href="#" target="_blank"><img :src="instagram" alt="instagram logo" width="70%"></a>
        <a href="mailto:#" target="_blank"><img :src="email" alt="email logo" width="70%"></a>
    </div>

    <div>
        <div class="work-section">
                <p class="text-work">See what Moovingo<br>Can do for you</p>
               <a href="#" class="contact-button">Book Valuation</a>
               <a href="#" class="contact-button">Contact Us</a>
            </div>
        <img :src="office" Alt="office work" id="office">
            
    </div>


</div>