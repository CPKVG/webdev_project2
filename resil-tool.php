<?php
/* 
Template Name: tool 
*/  

get_header();
?>





    <div id="idAlert" class="alertPopUp">
      <div class="alertPopUp-content">
        <span class="closeButton">×</span>
        <p class = "p_alert">You left out some questions</p>
      </div>
    </div>



    <div class="page">

    <div class="fontMain">
    <div class="pageMargin">
        <div class="pageBackgound">
        <form id="choice">  


    <div id="choiceP1">

  
      <div class="parent">
        <div class="contentWarp">
        <div class="industry-select" style="width:500px;">
            <select id="industselect" >
            <option name="alert1" value="0" checked="">What is your industry?(ANZIC)</option>
        <option name="idb" value="a">1A - Agriculture, Forestry and Fishing</option>
        <option name="idb" value="b">2B - Mining</option>
        <option name="idb" value="c">3C - Manufacturing</option>
        <option name="idb" value="d">4D - Electricity/Gas/Water Services</option>
        <option name="idb" value="e">5E - Construction</option>
        <option name="idb" value="f">6F - Wholesale Trade</option>
        <option name="idb" value="g">7G - Retail Trade</option>
        <option name="idb" value="h">8H - Accommodation and Food Services</option>
        <option name="idb" value="i">9I - Transport, Postal and Warehousing</option>
        <option name="idb" value="j">10J - Information Media and Telecommunications</option>
	      <option name="idb" value="k">11K - Financial and Insurance Services</option>
        <option name="idb" value="l">12L - Rental, Hiring and Real Estate Services</option>
        <option name="idb" value="m">13M - Professional, Scientific and Technical Services</option>
			  <option name="idb" value="n">14N - Administrative and Support Services</option>
			  <option name="idb" value="o">15O - Public Administration and Safety</option>
			  <option name="idb" value="p">16P - Education and Training</option>
			  <option name="idb" value="q">17Q - Health Care and Social Assistance</option>
			  <option name="idb" value="r">18R - Arts and Recreation Services</option>
			  <option name="idb" value="s">19S - Other Services</option>
            </select>
          </div>
        </div>
          <div id="warningID1">⚠</div> 
      </div>

    <div class="gap1"></div>
      <div class="parent">
        <div class="contentWarp">
    <div class="industry-select" style="width:500px;">
    <select id="fsSelect"> 
    <option name="alert2" value="0" checked="">What would you classifiy your business size as?</option>   
    <option name="idb1" value="a">Small(1-5)</option>
    <option name="idb1" value="b">Medium(6+)</option>
    </select>  
    </div>
    </div>
    <div id="warningID2">⚠</div> 
    </div>

    <div class="cssMargin">

    <div class="fontheader">Questions 1: How well are people involved in your resilience planning?</div>
    <label class="containerRadio">A) Only the owners/managers are involved
      <input type="radio" checked="checked" name="rdb" value="a">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio">B) Managers and employees are involved
      <input type="radio" name="rdb" value="b">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> C) Managers, employees and subcontractors are involved
      <input type="radio" name="rdb" value="c">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> D) Managers, employees, subcontractors, suppliers, community and customers; and (people in your supply chain) are involved
      <input type="radio" name="rdb" value="d">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio">  E) No such plan exists
      <input type="radio" name="rdb" value="e">
      <span class="checkmark"></span>
    </label>
    
    </div>

    <div class="cssMargin">

    <div class="fontheader">Question 2: Have you established which elements are crucial to your business?</div>
    <label class="containerRadio"> A) Yes, we have a document listing the orders of priorities based on how critical they are in keeping the business running.
      <input type="radio" checked="checked" name="rdb1" value="a">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> B) Yes, But it’s up to everyone at work to make their own assesssment such that they can carry out their work.
      <input type="radio" name="rdb1" value="b">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> C) No, It’s too difficult to distinguish what’s important and what’s not / too many moving parts.
      <input type="radio" name="rdb1" value="c">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> D) Maybe, I can imagine what’s important but I never really had to worry about it.
      <input type="radio" name="rdb1" value="d">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> E) No, They haven’t failed us yet so I’m not worried.
      <input type="radio" name="rdb1" value="e">
      <span class="checkmark"></span>
    </label>

    </div>

    <div class="cssMargin">

    <div class="fontheader">Question 3: Have you established an order of priority in case something goes wrong?</div>
    <label class="containerRadio"> A) Yes, we have a document listing the orders of priorities based on how critical they are in keeping the business running.
      <input type="radio" checked="checked" name="rdb2" value="a">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> B) Partially yes, its been a while since we updated it.
      <input type="radio" name="rdb2" value="b">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> C) No, we haven’t identified what’s critical to our business (referring to question 2)
      <input type="radio" name="rdb2" value="c">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> D) No, we know what’s important for keeping our business running but we dont know which is more important.
      <input type="radio" name="rdb2" value="d">
      <span class="checkmark"></span>
    </label>

    </div>
    <div class="cssMargin">

    <div class="fontheader">Question 4: Can your business identifity hazards and mitigation measures that your business has already put in place?</div>
    <label class="containerRadio"> A) Yes, our business mitigation measures are maintained and we are constantly aware of identifying, documenting and mitigating hazards
      <input type="radio" checked="checked" name="rdb3" value="a">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> B) No, we have not made any efforts in identifying hazards
      <input type="radio" name="rdb3" value="b">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> C) No, we are not aware of any hazards nor know of any mitigation measures.
      <input type="radio" name="rdb3" value="c">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> D) Partially yes, as we have not mentioned mitigation measures but have identified hazards.
      <input type="radio" name="rdb3" value="d">
      <span class="checkmark"></span>
    </label>
    </div>
    <div class="cssMargin">

    <div class="fontheader">Question 5: Our business understands that for a business to get the most out of a business resilience plan, active testing and conducting drills are required.</div>
    <label class="containerRadio"> A) No, we are still working on our plan
      <input type="radio" checked="checked" name="rdb4" value="a">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> B) No, We've only prepared our plan and discussed what we would do, never conducted practiced drills.
      <input type="radio" name="rdb4" value="b">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> C) No, we’ve only prepared our plan.
      <input type="radio" name="rdb4" value="c">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> D) Yes, We've got a plan and have experience enacting it.
      <input type="radio" name="rdb4" value="d">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> E) Yes, We've got a plan and do regular practice drills and updates.
      <input type="radio" name="rdb4" value="e">
      <span class="checkmark"></span>
    </label>
    </div>
    <div class="cssMargin">

    <div class="fontheader">Question 6: Our business has made plans that include local communities by discussing what support can be provided during and after a community wide emergency.</div>
    <label class="containerRadio"> A) No, our business continuity plan does not include entities outside our business.
      <input type="radio" checked="checked" name="rdb5" value="a">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> B) Yes, our inputs from our community leaders were incorporated within our business continuity plan.
      <input type="radio" name="rdb5" value="b">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> C) No, we are not confident that we can provide resources due to managerial policy
      <input type="radio" name="rdb5" value="c">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> D) Yes, but our plan prioritizes our own business and staff before others.
      <input type="radio" name="rdb5" value="d">
      <span class="checkmark"></span>
    </label>
    <label class="containerRadio"> E) No, our business plan does not include local communities nor do we intend to.
      <input type="radio" name="rdb5" value="e">
      <span class="checkmark"></span>
    </label>
    </div>


    <input type="button" id="choiceP1" value="Next" class="nextPage" onclick="rtFunc1()"> 
    </div>

    <div id="choiceP2">


      <div class="cssMargin">

      <div class="fontheader">Question 7: Once an emergency is identified, our business can immediately deviate itself away from routine and into emergency mode.</div>
      <label class="containerRadio"> A) Yes, we’ve conducted drills/ experienced in dealing with emergencies.
        <input type="radio" checked="checked" name="rdb6" value="a">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio">B) Not sure, our business has not experienced emergencies nor performed drills.
        <input type="radio" name="rdb6" value="b">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> C) No, our business is unable to transition in time due to other factors.
        <input type="radio" name="rdb6" value="c">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> D) Maybe, we are not sure what is considered immediate.
        <input type="radio" name="rdb6" value="d">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> E) No, our business can not react in time therefore our transition lags.
        <input type="radio" name="rdb6" value="e">
        <span class="checkmark"></span>
      </label>
    </div>
      <div class="cssMargin">

      <div class="fontheader">Question 8: To maintain a high level of readiness for emergencies, we invest in the appropriate level of resources.</div>
      <label class="containerRadio"> A) Yes, we keep ourselves at the highest level of readiness.
        <input type="radio" checked="checked" name="rdb7" value="a">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> B) No, we do not have the luxury to divert resources.
        <input type="radio" name="rdb7" value="b">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> C) Yes, only at times when we have surplus resources, everyday business operations takes priority.
        <input type="radio" name="rdb7" value="c">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> D) No, even with a surplus of resources; we prefer to invest these elsewhere.
        <input type="radio" name="rdb7" value="d">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> E) No, we look at ways of maintaining readiness without investing resources.
        <input type="radio" name="rdb7" value="e">
        <span class="checkmark"></span>
      </label>
    </div>
      <div class="cssMargin">

      <div class="fontheader">Question 9: Does your business continuity plan include what your current insurances cover, policy exclusions, documents and contact details?</div>
      <label class="containerRadio"> A) No, we don’t have insurances.
        <input type="radio" checked="checked" name="rdb8" value="a">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> B) Yes, we have multiple copies stored in our primary and secondary locations
        <input type="radio" name="rdb8" value="b">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> C) Yes, but some may be out of date.
        <input type="radio" name="rdb8" value="c">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> D) I don’t know if these are managed by someone else.
        <input type="radio" name="rdb8" value="d">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> E) No, we have insurances, just not included in our resilience plan.
        <input type="radio" name="rdb8" value="e">
        <span class="checkmark"></span>
      </label>
    </div>
      <div class="cssMargin">

      <div class="fontheader">Question 10: Has your business considered what effects an emergency within your business might have on its stakeholders?</div>
      <label class="containerRadio"> A) Yes, we have procedures in place for us to deal with both inconveniences to our customers and suppliers. While also knowing what our employees are to do when the business can not function normally.
        <input type="radio" checked="checked" name="rdb9" value="a">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> B) No, we do not consider the impacts to our stakeholders’ businesses  besides shareholders, as we are not obligated to help our other stakeholders.
        <input type="radio" name="rdb9" value="b">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> C) Yes, we have considered the impact we may have on our stakeholders but lack the resources to be of any help
        <input type="radio" name="rdb9" value="c">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> D) Yes, by priority of importance they have been aligned to our business.
        <input type="radio" name="rdb9" value="d">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> E) No, we don’t know who our stakeholders are.
        <input type="radio" name="rdb9" value="e">
        <span class="checkmark"></span>
      </label>
    </div>
      <div class="cssMargin">

      <div class="fontheader">Question 11: Does your business know the minimally required resources needed to function as a business- such as the number of sales required to break even, critical assets and functions, essential personnel for a skeleton crew, etc?</div>
      <label class="containerRadio"> A) Yes, our IT system keeps track of such information so that we know what our minimally required resources are. 
        <input type="radio" checked="checked" name="rdb10" value="a">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> B) Yes, we have specialists who we could turn to, to manage this if we had to run with minimum resources.
        <input type="radio" name="rdb10" value="b">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> C) No, it is too complicated for us to calculate.
        <input type="radio" name="rdb10" value="c">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> D) No, we don’t see the value in doing this.
        <input type="radio" name="rdb10" value="d">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> E) Maybe, we have paper documents that we could refer to but they may be out of date or unreliable.
        <input type="radio" name="rdb10" value="e">
        <span class="checkmark"></span>
      </label>
    </div>
      <div class="cssMargin">

      <div class="fontheader">Question 12: Does your business think of scenarios where it may be necessary to adapt to a new long-term environment? For example, Uber disrupting the taxi industry. (Post-natural disasters usually do not change the business environment, only things like innovation disruptions, consumer tastes and regulations)</div>
      <label class="containerRadio"> A) No, our business is not concerned as it's rare that we feel the effects of the market.
        <input type="radio" checked="checked" name="rdb11" value="a">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> B) Yes, we think of different business scenarios and establish plans around it.
        <input type="radio" name="rdb11" value="b">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> C) No, we do not have the time or resources.
        <input type="radio" name="rdb11" value="c">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> D) Yes, we have/ are looking into diversifying our revenue streams to mitigate the risks from market disruptions.
        <input type="radio" name="rdb11" value="d">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> E) Yes, but we struggle with the research or the knowledge to do so.
        <input type="radio" name="rdb11" value="e">
        <span class="checkmark"></span>
      </label>
    </div>


    <input type="button" id="choice2" value="Previous" class="backPage" onclick="rtBFunc1()"> 
    <input type="button" id="choiceP2" value="Next" class="nextPage" onclick="rtFunc2()"> 
    </div>  
    <div id="choiceP3">

      <div class="cssMargin">

      <div class="fontheader">Question 13: Your managers are proactive in identifying issues within your business and their input is taken into consideration for your business continuity plan.</div>
      <label class="containerRadio"> A) Yes, our business also creates an environment for employees to have their own input in contributing to the business continuity plan.
        <input type="radio" checked="checked" name="v1" value="a">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> B) No, our managers should not bother with things that may not occur and from distracting them from their work.
        <input type="radio" name="v1" value="b">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> C) No, most of our workers are contractors and we do not expect their input on this matter.
        <input type="radio" name="v1" value="c">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> D) Yes, they have at times provided input in how the business could solve issues and their opinions are taken into consideration.
        <input type="radio" name="v1" value="d">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> E) Maybe, we know that some of our managers are proactive while others wait and see.
        <input type="radio" name="v1" value="e">
        <span class="checkmark"></span>
      </label>

    </div>
      <div class="cssMargin">

      <div class="fontheader">Question 14: Your business culture promotes employees to work well with each other.</div>
      <label class="containerRadio"> A) No, our employees are not required to communicate with each other to do their work.
        <input type="radio" checked="checked" name="v2" value="a">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> B) No, we do not care what our business culture does.
        <input type="radio" name="v2" value="b">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> C) Yes, we invest in team building exercises and training programs, and confidential staff surveys
        <input type="radio" name="v2" value="c">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> D) Yes, we have created facilities or time to promote such engagement such as a morning coffee ritual or after work activities without employees needing to be mindful of red tapes or hierarchies.
        <input type="radio" name="v2" value="d">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> E) Both C &amp; D
        <input type="radio" name="v2" value="e">
        <span class="checkmark"></span>
      </label>

    </div>
      <div class="cssMargin">

      <div class="fontheader">Question 15: Your business can identify employees that have gone the extra mile in their work and provide them with the opportunities to develop themselves.</div>
      <label class="containerRadio"> A) Yes, we keep a keen eye on those that go beyond their duties and provide them with opportunities.
        <input type="radio" checked="checked" name="v3" value="a">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> B) No, employees should keep their work within the agreed expectation.
        <input type="radio" name="v3" value="b">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio">C) Yes and no. We identify these employees and reward them for their work, but weexpect them to develop themselves without us having to provide them with opportunities
        <input type="radio" name="v3" value="c">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> D) No, we struggle to identify such employees and therefore dont provide them with opportunities.
        <input type="radio" name="v3" value="d">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> E) No, our workforce is mostly made up of contractors, therefore its not applicable here.
        <input type="radio" name="v3" value="e">
        <span class="checkmark"></span>
      </label>

    </div>
      <div class="cssMargin">

      <div class="fontheader">Question 16: Employees in your business are encouraged to think creatively when they face issues.</div>
      <label class="containerRadio">  A) Yes, we have examples of this occurring in the past and we encourage this kind of behavior moving forward.
        <input type="radio" checked="checked" name="v4" value="a">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> B) No, our employees are given instructions on what to do when they face an issue and are expected to follow through with it.
        <input type="radio" name="v4" value="b">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> C) No, we don’t encourage nor discourage employees to solve issues themselves as we expect them to do it themselves.
        <input type="radio" name="v4" value="c">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> D) Yes and no, our employees naturally exhibit these behaviors, so that has little requirement from our part.
        <input type="radio" name="v4" value="d">
        <span class="checkmark"></span>
      </label>

    </div>
    <div class="cssMargin">

      <div class="fontheader">Question 17: Your employees are not restricted to whom they work with to get the job done.</div>
      <label class="containerRadio"> A) Yes, we put effort into removing any red tapes or hierarchies that may hinder employees' work
        <input type="radio" checked="checked" name="v5" value="a">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> B) No, restrictions are in place so that resources are not utilized in ways they are not intended for.
        <input type="radio" name="v5" value="b">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio">C) No, restrictions are in place due to business policy to prevent issues relating to the law or health and safety.
        <input type="radio" name="v5" value="c">
        <span class="checkmark"></span>
      </label>
      <label class="containerRadio"> D) Yes, we put effort into removing restrictions expect except in areas we deem too risky.
        <input type="radio" name="v5" value="d">
        <span class="checkmark"></span>
      </label>

    </div>


    <input type="button" id="choice3" value="Previous" class="backPage" onclick="rtBFunc2()"> 

    <input type="button" id="next3" value="Submit" class="Submit" onclick="rtFunc()"> 
    <!-- "next3" triggers caculator-->

    </div>
    </form> 





  <form id="feedback">  
    <div id = progression>
 

<!-- dummy popup -->
    <div id = 'sign_up_wrapper'>
      <div id = sign_up>
        <!--<input type="button" id="show_reg" value="sign up here" onclick = "modalfunc()" >   -->
        <div id = "ad_slogan">Want to save your progress?</div>
        <button type="button" class="myBtn" id="ad_btn">Click here to Register</button>
    </div>
            <div id = 'dummytable'>
            <table border ="1">
   

    <tr>
    <th>Date</th>
    <th>Score</th>
    </tr>

    <tr style="height: 20px;"> <!-- Mimic the margin -->
    </tr>

    <tr>
    <td>Now</td>
    <td>60</td>
    </tr>

    <tr style="height: 20px;"> <!-- Mimic the margin -->
    </tr>

    <tr>
    <td colspan="2"><div id = "progressheader">Your previous progress</div></td>
    </tr>

    <tr>
    <th>1/12/19</th>
    <th>60</th>
    </tr>
    <tr>
    <th>13/03/20</th>
    <th>69</th>
    </tr>
    <tr>
    <th>21/05/20</th>
    <th>69</th>
    </tr>
    </table>

  </div>
</div>

<div id = "logged_table">
  <table border="1">
  <tr>
  <th>Date</th>
  <th>Score</th>
  </tr>

  <tr style="height: 20px;"> <!-- Mimic the margin -->
  </tr>

  <tr>
  <td>Now</td>
  <td><div class="rtScore"></div></td>
  </tr>

  <tr style="height: 20px;"> <!-- Mimic the margin -->
  </tr>

  <tr id = progress_tr>
  <td colspan="2" id = "progressheader"><div>Your previous scores</div></td>
  <td colspan="2" id = 'progressheader2'><div>This is where your progress is recorded, try again next time to see how you improved</div></td>
  </tr>

  <?php
  
  global $wpdb;
  $user_id = get_current_user_id();
  $result = $wpdb->get_results ( "SELECT * FROM wp_score where ID = $user_id order by date asc" );


  foreach ( $result as $print ) {
  ?>

  <tr>
    <td><?php echo $print->date; ?></td>
    <td><?php echo $print->score;?></td>
  </tr>
  <?php
  }
  ?>
  </table>
  <div id="loadMore">Load more</div>
  <div id="showLess">Show less</div>
</div>



        </div>

      <div class="boxParent">

    
    <div class="parent">
      <div class="contentWarp">
      <p>SCORE:</p> 
      </div>
        <div class ="rtScore"></div>
        <p style="margin-bottom:1%">/100 </p>
          </div>


          <div class="parent2">
            <div class="contentWarp2">    
    <p>Your business resilience is: </p></div>
        <p id="fbText" style="font-weight: bold;"></p></div>
        


    <div id="cssFeedBackstyle"> 

        <div class="score">
            <div id="1stLink">
              <p>1st link:</p>
            </div>
            <div>
            <p id="feedback1"></p>
            </div>
        </div>

        <div class="score">
            <div id="2ndLink">
            <p>2nd link:</p>
            </div>
            <div>
            <p id="feedback2"></p> 
            </div>
        </div>

      <div class="score">
            <div id="3rdLink">
            <p>3rd link:</p>
            </div>
            <div>
            <p id="feedback3"></p> 
            </div>
        </div>

        <div>
          <div>
        <p id="feedback0" style = "max-width: 50%;">We've ran out of resources to recommend, well done!</p> 
          </div>
        </div>
    
    </div>
    <p id="linkStatement" style="padding-left: 15px;font-size: 0.800em;margin-right: 50%;">
      Links to resources are generated based on how you answered the multichoice.
    </p>  
    </div>
      <input type="button" id="choice3" value="Previous" class="backPage" onclick="rtBFunc3()"> 
      <input type="button" id="back" value="Reset" class="reset" onclick="rtFuncB()"> 

     

    </form>


    </div>
 
    </div>

    <script>
/*
        jQuery(document).ready(function($) {
        $('.myBtn').click(function(){
          modal.style.display = "block";
           });
        });*/

 function Clear()
    {    
    const radioGroupNames = [
        "idb",
        "rdb",
        "v"
    ].forEach(x => clearRadioGroup(x)); // daniels work 
    }


    function clearRadioGroup(GroupName)
    {
    var ele = document.getElementsByName(GroupName);
        for(var i=0;i<ele.length;i++)
        ele[i].checked = false;
    };

    function functReset(){
    window.location.reload(true); 
    };


    //***pop up alert scripts***
    const popup = document.getElementById("idAlert");




    var warningID1 = document.getElementById('warningID1');
    var warningID2 = document.getElementById('warningID2');
    var span = document.getElementsByClassName("closeButton")[0];




 
    //warning symbol 
    function popupOpenFunc(){

      const popupArrayValue=[];

    popupArrayValue.push(document.getElementById('industselect').value);
    if(popupArrayValue[0]==="0"){
      warningID1.style.display = "block";
    }
    popupArrayValue.push(document.getElementById('fsSelect').value);
    if(popupArrayValue[1]==="0"){
      warningID2.style.display = "block";
    }
    console.log(popupArrayValue);


    popup.style.display = "block";
    }

    //close the popup
    
    onclick = function(span) {
      popup.style.display = "none";
    }
    //user clicks outside of popup to close
    window.onclick = function(event) {
      if (event.target == popup) {
        popup.style.display = "none";
      }
    }

    //***end of alert scripts***

    //custom select-box


    var x, i, j, l, ll, selElmnt, a, b, c;
    /* Look for any elements with the class "custom-select": */
    x = document.getElementsByClassName("industry-select");
    l = x.length;
    for (i = 0; i < l; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      console.log(selElmnt[0])
      ll = selElmnt.length;
    


      /* For each element, create a new DIV that will act as the selected item: */
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      console.log(x[i])


      /* For each element, create a new DIV that will contain the option list: */
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 1; j < ll; j++) {


        /* For each option in the original select element,
        create a new DIV that will act as an option item: */
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {

            /* When an item is clicked, update the original select box,
            and the selected item: */
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");


              //remove warning tag
                
              var warnArray=[];
              warnArray.push(warningID1,warningID2)
              console.log(warnArray);
              console.log(warnArray[1].style)

              var b1 = document.getElementById("industselect").value;
              var b2 = document.getElementById("fsSelect").value;
              if(b1!="0"){warnArray[0].style="display:none;"};
              if(b2!="0"){warnArray[1].style="display:none;"};


              //if(selElmnt[0].name="alert1"){warningID1.style.display ="none";};
            //if (selElmnt[0].name="alert2"){warningID2.style.display ="none";}
            
                break;
              }
            }
            h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {

        /* When the select box is clicked, close any other select boxes,
        and open/close the current select box: */
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
    }

    function closeAllSelect(elmnt) {


      /* A function that will close all select boxes in the document,
      except the current select box: */
      var x, y, i, xl, yl, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }

    /* If the user clicks anywhere outside the select box,
    then close all select boxes: */
    document.addEventListener("click", closeAllSelect); 




    //end of custom select-box




    document.getElementById('feedback').style.display='none';
    document.getElementById('choiceP2').style.display='none'; 
    document.getElementById('choiceP3').style.display='none';
    document.getElementById('sign_up').style.display="none";
    document.getElementById('idAlert').style.display='none';  
    document.getElementById('warningID1').style.display='none';
    document.getElementById('warningID2').style.display="none";

    //document.getElementById('dummytable').style.display="none";    


  /*
    function user_status(){
    document.getElementById('logged_table').style.display="none";
    document.getElementById('dummytable').style.display="block";
    };
  */
    //alert function
    function funcAlert(){
      var b1 = document.getElementById("industselect").value;
        var b2 = document.getElementById("fsSelect").value;
    if (b1 === "0"|| b2 === "0"){
      
      popupOpenFunc();}
    else{
        nextPage1();
        }   
    };
    //end of alert function




    //page 1
    function nextPage1() {
    var e = document.getElementById("choiceP1");
    var b = document.getElementById("choiceP2");
    e.style.display = ((e.style.display!='none') ? 'none' : 'block');
    b.style.display = (b.style.display ='block');


    };//if first 2 are not inputed


    

    function prevPage1(){
        var b = document.getElementById("choiceP1");
        var e = document.getElementById("choiceP2");
    e.style.display = ((e.style.display!='none') ? 'none' : 'block');
    b.style.display = (b.style.display ='block');

    }


    //page2
    function nextPage2() {
    var e = document.getElementById("choiceP2");
    var b = document.getElementById("choiceP3");
    e.style.display = ((e.style.display!='none') ? 'none' : 'block');
    b.style.display = (b.style.display ='block');
    }
    function prevPage2() {
    var b = document.getElementById("choiceP2");
    var e = document.getElementById("choiceP3");
    e.style.display = ((e.style.display!='none') ? 'none' : 'block');
    b.style.display = (b.style.display ='block');
    }

    //page3
    function prevPage3() {
    var b = document.getElementById("choiceP3");
    var e = document.getElementById("feedback");
    e.style.display = ((e.style.display!='none') ? 'none' : 'block');
    b.style.display = (b.style.display ='block');
    }


    //feedbackpage
    function feedBack(){
    var e = document.getElementById("choiceP3");    
    var b = document.getElementById("feedback"); 
    var s = document.getElementById("sign_up");    
    e.style.display = ((e.style.display ='none'));
    b.style.display = (b.style.display ='block');
    s.style.display = (b.style.display ='block');

    }


</script>