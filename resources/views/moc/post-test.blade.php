@extends('frontend.app')

@section('title')
PCOF Post-test
@endsection

@section('content')

<script>
  $(document).ready(function(){
    $("#allquestions").hide();

  function checked(){
    var  q1 = $('#completed_pcof_0').is(":checked");
    var  q2 = $('#have_you_used_pcof_0').is(":checked");
     if (q1+q2 == 2){
      //show form
      $("#allquestions").show();
      $("#notcomplete").hide();
     }else{
      $("#allquestions").hide();
      $("#notcomplete").show();
     }//end if else
  }//end checked
  $( "#completed_pcof_0" ).on( "click", checked );
  $( "#completed_pcof_1" ).on( "click", checked );
  $( "#have_you_used_pcof_0" ).on( "click", checked );
  $( "#have_you_used_pcof_1" ).on( "click", checked );
  });//end document ready

//   $(document).ready(function () {
//     $('#submitBtn').click(function() {
//       checked_a = $("#check_skills_regularly_2_0:checked").length;
//       //checked_a = $("#heck_skills_regularly_2_0:checked").length;
//       if(!checked_a) {
//         alert("You must check at least one checkbox.");
//         return false;
//       }

//     });
// });
</script>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-12 col-md-8">
		<div class="card">
			<div class="card-header"><h1><a href="{{url('/pcof')}}">PCOF</a> MOC Post Test</h1></div>
			<div class="card-body">
				 <form method="POST">
          @csrf
          <input type="hidden" value="PCOF Post-Test" id="formname" name="formname">
      <div class="form-group">
        <label>Have you completed the PCOF training?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="completed_pcof" id="completed_pcof_0" type="radio" class="custom-control-input q1" value='1'> 
              <label for="completed_pcof_0" class="custom-control-label">Yes</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="completed_pcof" id="completed_pcof_1" type="radio" class="custom-control-input" value="0" > 
              <label for="completed_pcof_1" class="custom-control-label">No</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Have you used the online PCOF form to give or receive feedback at least 4 times?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="have_you_used_pcof" id="have_you_used_pcof_0" type="radio" class="custom-control-input" value="1" > 
              <label for="have_you_used_pcof_0" class="custom-control-label">Yes</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="have_you_used_pcof" id="have_you_used_pcof_1" type="radio" class="custom-control-input" value="0" > 
              <label for="have_you_used_pcof_1" class="custom-control-label">No</label>
            </div>
          </div>
        </div>
      </div>

      <div id="notcomplete" class=" alert alert-danger" style="display: none;">
        <p>You must choose yes for both questions above in order to start the post test. <a href="{{url('/pcof')}}"></a></p>
      </div>
      <div id="allquestions" style="display: none;">
      <div class="form-group">
        <label>How familiar are you with the components of the patient-centered visit according to the PCOF model?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?" id="how_familiar_components_0" type="radio" class="custom-control-input" value="I know none of them"required > 
              <label for="how_familiar_components_0" class="custom-control-label">I know none of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?" id="how_familiar_components_1" type="radio" class="custom-control-input" value="I know a couple of them" required> 
              <label for="how_familiar_components_1" class="custom-control-label">I know a couple of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?" id="how_familiar_components_2" type="radio" class="custom-control-input" value="I know half" required> 
              <label for="how_familiar_components_2" class="custom-control-label">I know half</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?" id="how_familiar_components_3" type="radio" class="custom-control-input" value="I know most of them" required> 
              <label for="how_familiar_components_3" class="custom-control-label">I know most of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?" id="how_familiar_components_4" type="radio" class="custom-control-input" value="I know all of them" required> 
              <label for="how_familiar_components_4" class="custom-control-label">I know all of them</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Please rate your comfort level in giving communication feedback to students</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to students" id="rate_comfort_level_communication_0" type="radio" class="custom-control-input" value="Very uncomfortable"required > 
              <label for="rate_comfort_level_communication_0" class="custom-control-label">Very uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to students" id="rate_comfort_level_communication_1" type="radio" class="custom-control-input" value="Somewhat uncomfortable" required> 
              <label for="rate_comfort_level_communication_1" class="custom-control-label">Somewhat uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to students" id="rate_comfort_level_communication_2" type="radio" class="custom-control-input" value="Comfortable" required> 
              <label for="rate_comfort_level_communication_2" class="custom-control-label">Comfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to students" id="rate_comfort_level_communication_3" type="radio" class="custom-control-input" value="Comfortable and confident"required > 
              <label for="rate_comfort_level_communication_3" class="custom-control-label">Comfortable and confident</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to students" id="rate_comfort_level_communication_4" type="radio" class="custom-control-input" value="Highly comfortable and adaptive"required > 
              <label for="rate_comfort_level_communication_4" class="custom-control-label">Highly comfortable and adaptive</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How does using the PCOF affect how much you enjoy teaching communication skills?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?" id="pcof_affect_enjoy_teaching_0" type="radio"  class="custom-control-input" value="N/A – I have never used the PCOF"required> 
              <label for="pcof_affect_enjoy_teaching_0" class="custom-control-label">N/A – I have never used the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?" id="pcof_affect_enjoy_teaching_1" type="radio"  class="custom-control-input" value="It is unpleasant to give feedback using the PCOF"required> 
              <label for="pcof_affect_enjoy_teaching_1" class="custom-control-label">It is unpleasant to give feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?" id="pcof_affect_enjoy_teaching_2" type="radio"  class="custom-control-input" value="I tolerate giving feedback using the PCOF"required> 
              <label for="pcof_affect_enjoy_teaching_2" class="custom-control-label">I tolerate giving feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?" id="pcof_affect_enjoy_teaching_3" type="radio"  class="custom-control-input" value="Giving feedback using the PCOF is neither unpleasant nor enjoyable (neutral)"required> 
              <label for="pcof_affect_enjoy_teaching_3" class="custom-control-label">Giving feedback using the PCOF is neither unpleasant nor enjoyable (neutral)</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?" id="pcof_affect_enjoy_teaching_4" type="radio"  class="custom-control-input" value="I enjoy giving feedback using the PCOF"required> 
              <label for="pcof_affect_enjoy_teaching_4" class="custom-control-label">I enjoy giving feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?" id="pcof_affect_enjoy_teaching_5" type="radio"  class="custom-control-input" value="Giving feedback using the PCOF is gratifying"required> 
              <label for="pcof_affect_enjoy_teaching_5" class="custom-control-label">Giving feedback using the PCOF is gratifying</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How specific are you in how you teach and offer feedback about communication skills?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?" id="how_specific_you_teach_0" type="radio"  class="custom-control-input" value="My vocabulary to describe communication skills is very limited"required> 
              <label for="how_specific_you_teach_0" class="custom-control-label">My vocabulary to describe communication skills is very limited</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?" id="how_specific_you_teach_1" type="radio"  class="custom-control-input" value="I have a few expressions/terms to describe communication skills"required> 
              <label for="how_specific_you_teach_1" class="custom-control-label">I have a few expressions/terms to describe communication skills</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?" id="how_specific_you_teach_2" type="radio"  class="custom-control-input" value="I am able to describe common communication skills"required> 
              <label for="how_specific_you_teach_2" class="custom-control-label">I am able to describe common communication skills</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?" id="how_specific_you_teach_3" type="radio"  class="custom-control-input" value="I can describe communication skills that apply to most situations"required> 
              <label for="how_specific_you_teach_3" class="custom-control-label">I can describe communication skills that apply to most situations</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?" id="how_specific_you_teach_4" type="radio"  class="custom-control-input" value="I can be articulate and specific in describing a wide range of communication skills"required> 
              <label for="how_specific_you_teach_4" class="custom-control-label">I can be articulate and specific in describing a wide range of communication skills</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Please rate your comfort using patient centered communication skills in your own clinical practice</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice" id="rate_comfort_patient_skills_0" type="radio" class="custom-control-input" value="Very uncomfortable" required> 
              <label for="rate_comfort_patient_skills_0" class="custom-control-label">Very uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice" id="rate_comfort_patient_skills_1" type="radio" class="custom-control-input" value="Somewhat uncomfortable"required > 
              <label for="rate_comfort_patient_skills_1" class="custom-control-label">Somewhat uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice" id="rate_comfort_patient_skills_2" type="radio" class="custom-control-input" value="Comfortable" required> 
              <label for="rate_comfort_patient_skills_2" class="custom-control-label">Comfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice" id="rate_comfort_patient_skills_3" type="radio"  class="custom-control-input" value="Comfortable and confident"required> 
              <label for="rate_comfort_patient_skills_3" class="custom-control-label">Comfortable and confident</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice" id="rate_comfort_patient_skills_4" type="radio"  class="custom-control-input" value="Highly comfortable and adaptive"required> 
              <label for="rate_comfort_patient_skills_4" class="custom-control-label">Highly comfortable and adaptive</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[0]" id="check_skills_0" type="checkbox" class="custom-control-input" value="Establishes Rapport" > 
              <label for="check_skills_0" class="custom-control-label">Establishes Rapport</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[1]" id="check_skills_1" type="checkbox" class="custom-control-input" value="Maintains Relationship Throughout the Visit" > 
              <label for="check_skills_1" class="custom-control-label">Maintains Relationship Throughout the Visit</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[2]" id="check_skills_2" type="checkbox" class="custom-control-input" value="fishCollaborative upfront agenda setting" > 
              <label for="check_skills_2" class="custom-control-label">Collaborative upfront agenda setting</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[3]" id="check_skills_3" type="checkbox"  class="custom-control-input" value="Maintains Efficiency using transparent (out loud) thinking and respectful interruption"> 
              <label for="check_skills_3" class="custom-control-label">Maintains Efficiency using transparent (out loud) thinking and respectful interruption</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[4]" id="check_skills_4" type="checkbox"  class="custom-control-input" value="Gathering Information"> 
              <label for="check_skills_4" class="custom-control-label">Gathering Information</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[5]" id="check_skills_5" type="checkbox"  class="custom-control-input" value="Assessing Patient or Family Perspective on Health"> 
              <label for="check_skills_5" class="custom-control-label">Assessing Patient or Family Perspective on Health</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[6]" id="check_skills_6" type="checkbox"  class="custom-control-input" value="Electronic Medical Record Use"> 
              <label for="check_skills_6" class="custom-control-label">Electronic Medical Record Use</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[7]" id="check_skills_7" type="checkbox"  class="custom-control-input" value="Physical Exam"> 
              <label for="check_skills_7" class="custom-control-label">Physical Exam</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[8]" id="check_skills_8" type="checkbox"  class="custom-control-input" value="Sharing Information"> 
              <label for="check_skills_8" class="custom-control-label">Sharing Information</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[9]" id="check_skills_9" type="checkbox"  class="custom-control-input" value="Behavior Change/Self Management"> 
              <label for="check_skills_9" class="custom-control-label">Behavior Change/Self Management</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[10]" id="check_skills_10" type="checkbox"  class="custom-control-input" value="Co-creating a plan"> 
              <label for="check_skills_10" class="custom-control-label">Co-creating a plan</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[11]" id="check_skills_11" type="checkbox"  class="custom-control-input" value="Closure"> 
              <label for="check_skills_11" class="custom-control-label">Closure</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[12]" id="check_skills_12" type="checkbox"  class="custom-control-input" value="N/A"> 
              <label for="check_skills_12" class="custom-control-label">N/A</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="how_completing_module_changed">How has completing this module changed the way you manage time during patient encounters?</label> 
        <textarea id="how_completing_module_changed" name="How has completing this module changed the way you manage time during patient encounters" cols="40" rows="5"  class="form-control"required></textarea>
      </div>
      <hr style="background-color:black;">
      <hr style="background-color:black;">
      <div class="form-group">
    <h4>Now, reflecting on your observation and feedback skills at the time of the pretest, please answer these questions as you would have <u>before you started the PCOF MOC</u></h4> 
        
      </div>
            <div class="form-group">
        <label>How familiar are you with the components of the patient-centered visit according to the PCOF model?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?_2" id="familiar_components_2_0" type="radio" class="custom-control-input" value="I know none of them"required> 
              <label for="familiar_components_2_0" class="custom-control-label">I know none of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?_2" id="familiar_components_2_1" type="radio" class="custom-control-input" value=" I know a couple of them"required> 
              <label for="familiar_components_2_1" class="custom-control-label">I know a couple of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?_2" id="familiar_components_2_2" type="radio" class="custom-control-input" value=" I know half"required> 
              <label for="familiar_components_2_2" class="custom-control-label">I know half</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?_2" id="familiar_components_2_3" type="radio" class="custom-control-input" value=" I know most of them"required> 
              <label for="familiar_components_2_3" class="custom-control-label">I know most of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?_2" id="familiar_components_2_4" type="radio" class="custom-control-input" value=" I know all of them"required> 
              <label for="familiar_components_2_4" class="custom-control-label">I know all of them</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Please rate your comfort level in giving communication feedback to students</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to student_2" id="rate_comfort_communication_feedback_2_0" type="radio" class="custom-control-input" value=" Very uncomfortable"required> 
              <label for="rate_comfort_communication_feedback_2_0" class="custom-control-label">Very uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to student_2" id="rate_comfort_communication_feedback_2_1" type="radio" class="custom-control-input" value=" Somewhat uncomfortable"required> 
              <label for="rate_comfort_communication_feedback_2_1" class="custom-control-label">Somewhat uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to student_2" id="rate_comfort_communication_feedback_2_2" type="radio" class="custom-control-input" value="Comfortable"required> 
              <label for="rate_comfort_communication_feedback_2_2" class="custom-control-label">Comfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to student_2" id="rate_comfort_communication_feedback_2_3" type="radio" class="custom-control-input" value=" Comfortable and confident"required> 
              <label for="rate_comfort_communication_feedback_2_3" class="custom-control-label">Comfortable and confident</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to student_2" id="rate_comfort_communication_feedback_2_4" type="radio" class="custom-control-input" value=" Highly comfortable and adaptive"> 
              <label for="rate_comfort_communication_feedback_2_4" class="custom-control-label"required>Highly comfortable and adaptive</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How does using the PCOF affect how much you enjoy teaching communication skills?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?_2" id="using_pcof_affect_teaching_2_0" type="radio" class="custom-control-input" value=" N/A – I have never used the PCOF"required> 
              <label for="using_pcof_affect_teaching_2_0" class="custom-control-label">N/A – I have never used the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?_2" id="using_pcof_affect_teaching_2_1" type="radio" class="custom-control-input" value=" It is unpleasant to give feedback using the PCOF"required> 
              <label for="using_pcof_affect_teaching_2_1" class="custom-control-label">It is unpleasant to give feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?_2" id="using_pcof_affect_teaching_2_2" type="radio" class="custom-control-input" value="I tolerate giving feedback using the PCOF"required> 
              <label for="using_pcof_affect_teaching_2_2" class="custom-control-label">I tolerate giving feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?_2" id="using_pcof_affect_teaching_2_3" type="radio" class="custom-control-input" value=" Giving feedback using the PCOF is neither unpleasant nor enjoyable (neutral)"required> 
              <label for="using_pcof_affect_teaching_2_3" class="custom-control-label">Giving feedback using the PCOF is neither unpleasant nor enjoyable (neutral)</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?_2" id="using_pcof_affect_teaching_2_4" type="radio" class="custom-control-input" value=" I enjoy giving feedback using the PCOF"required> 
              <label for="using_pcof_affect_teaching_2_4" class="custom-control-label">I enjoy giving feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?_2" id="using_pcof_affect_teaching_2_5" type="radio" class="custom-control-input" value=" Giving feedback using the PCOF is gratifying"required> 
              <label for="using_pcof_affect_teaching_2_5" class="custom-control-label">Giving feedback using the PCOF is gratifying</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How specific are you in how you teach and offer feedback about communication skills?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?_2" id="how_specific_feedback_2_0" type="radio" class="custom-control-input" value=" My vocabulary to describe communication skills is very limited"required> 
              <label for="how_specific_feedback_2_0" class="custom-control-label">My vocabulary to describe communication skills is very limited</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?_2" id="how_specific_feedback_2_1" type="radio" class="custom-control-input" value=" I have a few expressions/terms to describe communication skills"required> 
              <label for="how_specific_feedback_2_1" class="custom-control-label">I have a few expressions/terms to describe communication skills</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?_2" id="how_specific_feedback_2_2" type="radio" class="custom-control-input" value=" I am able to describe common communication skills"required> 
              <label for="how_specific_feedback_2_2" class="custom-control-label">I am able to describe common communication skills</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?_2" id="how_specific_feedback_2_3" type="radio" class="custom-control-input" value=" I can describe communication skills that apply to most situations"required> 
              <label for="how_specific_feedback_2_3" class="custom-control-label">I can describe communication skills that apply to most situations</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?_2" id="how_specific_feedback_2_4" type="radio" class="custom-control-input" value=" I can be articulate and specific in describing a wide range of communication skills"required> 
              <label for="how_specific_feedback_2_4" class="custom-control-label">I can be articulate and specific in describing a wide range of communication skills</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Please rate your comfort using patient centered communication skills in your own clinical practice</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice_2" id="rate_comfort_using_skills_2_0" type="radio" class="custom-control-input" value=" Very uncomfortable"required> 
              <label for="rate_comfort_using_skills_2_0" class="custom-control-label">Very uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice_2" id="rate_comfort_using_skills_2_1" type="radio" class="custom-control-input" value=" Somewhat uncomfortable"required> 
              <label for="rate_comfort_using_skills_2_1" class="custom-control-label">Somewhat uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice_2" id="rate_comfort_using_skills_2_2" type="radio" class="custom-control-input" value="Comfortable"required> 
              <label for="rate_comfort_using_skills_2_2" class="custom-control-label">Comfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice_2" id="rate_comfort_using_skills_2_3" type="radio" class="custom-control-input" value=" Comfortable and confident"required> 
              <label for="rate_comfort_using_skills_2_3" class="custom-control-label">Comfortable and confident</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice_2" id="rate_comfort_using_skills_2_4" type="radio" class="custom-control-input" value=" Highly comfortable and adaptive"required> 
              <label for="rate_comfort_using_skills_2_4" class="custom-control-label">Highly comfortable and adaptive</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[0]" id="check_skills_regularly_2_0" type="checkbox" class="custom-control-input" value=" Establishes Rapport"> 
              <label for="check_skills_regularly_2_0" class="custom-control-label">Establishes Rapport</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[1]" id="check_skills_regularly_2_1" type="checkbox" class="custom-control-input" value=" Maintains Relationship Throughout the Visit"> 
              <label for="check_skills_regularly_2_1" class="custom-control-label">Maintains Relationship Throughout the Visit</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[2]" id="check_skills_regularly_2_2" type="checkbox" class="custom-control-input" value=" Collaborative upfront agenda setting"> 
              <label for="check_skills_regularly_2_2" class="custom-control-label">Collaborative upfront agenda setting</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[3]" id="check_skills_regularly_2_3" type="checkbox" class="custom-control-input" value=" Maintains Efficiency using transparent (out loud) thinking and respectful interruption"> 
              <label for="check_skills_regularly_2_3" class="custom-control-label">Maintains Efficiency using transparent (out loud) thinking and respectful interruption</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[4]" id="check_skills_regularly_2_4" type="checkbox" class="custom-control-input" value=" Gathering Information"> 
              <label for="check_skills_regularly_2_4" class="custom-control-label">Gathering Information</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[5]" id="check_skills_regularly_2_5" type="checkbox" class="custom-control-input" value=" Assessing Patient or Family Perspective on Health"> 
              <label for="check_skills_regularly_2_5" class="custom-control-label">Assessing Patient or Family Perspective on Health</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[6]" id="check_skills_regularly_2_6" type="checkbox" class="custom-control-input" value=" Electronic Medical Record Use"> 
              <label for="check_skills_regularly_2_6" class="custom-control-label">Electronic Medical Record Use</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[7]" id="check_skills_regularly_2_7" type="checkbox" class="custom-control-input" value=" Physical Exam"> 
              <label for="check_skills_regularly_2_7" class="custom-control-label">Physical Exam</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[8]" id="check_skills_regularly_2_8" type="checkbox" class="custom-control-input" value=" Sharing Information"> 
              <label for="check_skills_regularly_2_8" class="custom-control-label">Sharing Information</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[9]" id="check_skills_regularly_2_9" type="checkbox" class="custom-control-input" value=" Behavior Change/Self Management"> 
              <label for="check_skills_regularly_2_9" class="custom-control-label">Behavior Change/Self Management</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[10]" id="check_skills_regularly_2_10" type="checkbox" class="custom-control-input" value=" Co-creating a plan"> 
              <label for="check_skills_regularly_2_10" class="custom-control-label">Co-creating a plan</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[11]" id="check_skills_regularly_2_11" type="checkbox" class="custom-control-input" value="Closure"> 
              <label for="check_skills_regularly_2_11" class="custom-control-label">Closure</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?_2[12]" id="check_skills_regularly_2_12" type="checkbox" class="custom-control-input" value="N/A"> 
              <label for="check_skills_regularly_2_12" class="custom-control-label">N/A</label>
            </div>
          </div>
        </div>
      </div> 


      <div class="form-group">
        <button  type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
      </div>
      </div>
    </form>
			</div>
		</div>
		</div>
	</div>
</div>
@endsection