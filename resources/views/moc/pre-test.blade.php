@extends('frontend.app')
@section('title')
PCOF Pre-Test
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-header"><h2><a href="{{url('/pcof')}}">PCOF</a> Pre-test</h2></div>
                <div class="card-body">
                	<form method="POST">
                    @csrf
                    <input type="hidden" value="PCOF Pre-Test" id="formname" name="formname">
      <div class="form-group ">
        <label for="years_in_practice">Years in practice</label> 
        <input id="years_in_practice" name="Years in practice" type="number" required="required" class="form-control">
      </div>
      <div class="form-group">
        <label>Type of practice</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Type of practice" id="type_of_practice_0" type="radio" required="required" class="custom-control-input" value="Residency practice"> 
              <label for="type_of_practice_0" class="custom-control-label">Residency practice</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Type of practice" id="type_of_practice_1" type="radio" required="required" class="custom-control-input" value="Community practice"> 
              <label for="type_of_practice_1" class="custom-control-label">Community practice</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Is there any time blocked in your patient care schedule when you have medical students working with you in clinic?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Is there any time blocked in your patient care schedule when you have medical students working with you in clinic?" id="time_blocked_0" type="radio" required="required" class="custom-control-input" value="Yes"> 
              <label for="time_blocked_0" class="custom-control-label">Yes</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Is there any time blocked in your patient care schedule when you have medical students working with you in clinic?" id="time_blocked_1" type="radio" required="required" class="custom-control-input" value="No"> 
              <label for="time_blocked_1" class="custom-control-label">No</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Have you ever done the PCOF training?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Have you ever done the PCOF training?" id="ever_done_pcof_0" type="radio" required="required" class="custom-control-input" value="Yes"> 
              <label for="ever_done_pcof_0" class="custom-control-label">Yes</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Have you ever done the PCOF training?" id="ever_done_pcof_1" type="radio" required="required" class="custom-control-input" value="No"> 
              <label for="ever_done_pcof_1" class="custom-control-label">No</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How long have you been observing students using the PCOF?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How long have you been observing students using the PCOF?" id="observing_students_0" type="radio" required="required" class="custom-control-input" value="Never"> 
              <label for="observing_students_0" class="custom-control-label">Never</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How long have you been observing students using the PCOF?" id="observing_students_1" type="radio" required="required" class="custom-control-input" value="1-2 Years"> 
              <label for="observing_students_1" class="custom-control-label">1-2 Years</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How long have you been observing students using the PCOF?" id="observing_students_2" type="radio" required="required" class="custom-control-input" value="2-4 Years"> 
              <label for="observing_students_2" class="custom-control-label">2-4 Years</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How long have you been observing students using the PCOF?" id="observing_students_3" type="radio" required="required" class="custom-control-input" value="4+ Years"> 
              <label for="observing_students_3" class="custom-control-label">4+ Years</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How familiar are you with the components of the patient-centered visit according to the PCOF model?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?" id="familiar_components_0" type="radio" required="required" class="custom-control-input" value="I know none of them"> 
              <label for="familiar_components_0" class="custom-control-label">I know none of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?" id="familiar_components_1" type="radio" required="required" class="custom-control-input" value="I know a couple of them"> 
              <label for="familiar_components_1" class="custom-control-label">I know a couple of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?" id="familiar_components_2" type="radio" required="required" class="custom-control-input" value="I know half"> 
              <label for="familiar_components_2" class="custom-control-label">I know half</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?" id="familiar_components_3" type="radio" required="required" class="custom-control-input" value="I know most of them"> 
              <label for="familiar_components_3" class="custom-control-label">I know most of them</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How familiar are you with the components of the patient-centered visit according to the PCOF model?" id="familiar_components_4" type="radio" required="required" class="custom-control-input" value="I know all of them"> 
              <label for="familiar_components_4" class="custom-control-label">I know all of them</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Please rate your comfort level in giving communication feedback to students</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to students" id="rate_comfort_level_0" type="radio" required="required" class="custom-control-input" value="Very uncomfortable"> 
              <label for="rate_comfort_level_0" class="custom-control-label">Very uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to students" id="rate_comfort_level_1" type="radio" required="required" class="custom-control-input" value="Somewhat uncomfortable"> 
              <label for="rate_comfort_level_1" class="custom-control-label">Somewhat uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to students" id="rate_comfort_level_2" type="radio" required="required" class="custom-control-input" value="Comfortable"> 
              <label for="rate_comfort_level_2" class="custom-control-label">Comfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to students" id="rate_comfort_level_3" type="radio" required="required" class="custom-control-input" value="Comfortable and confident"> 
              <label for="rate_comfort_level_3" class="custom-control-label">Comfortable and confident</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort level in giving communication feedback to students" id="rate_comfort_level_4" type="radio" required="required" class="custom-control-input" value="Highly comfortable and adaptive"> 
              <label for="rate_comfort_level_4" class="custom-control-label">Highly comfortable and adaptive</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How does using the PCOF affect how much you enjoy teaching communication skills?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?" id="pcof_affect_teaching_0" type="radio" required="required" class="custom-control-input" value="N/A – I have never used the PCOF"> 
              <label for="pcof_affect_teaching_0" class="custom-control-label">N/A – I have never used the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?" id="pcof_affect_teaching_1" type="radio" required="required" class="custom-control-input" value="It is unpleasant to give feedback using the PCOF"> 
              <label for="pcof_affect_teaching_1" class="custom-control-label">It is unpleasant to give feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?" id="pcof_affect_teaching_2" type="radio" required="required" class="custom-control-input" value="I tolerate giving feedback using the PCOF"> 
              <label for="pcof_affect_teaching_2" class="custom-control-label">I tolerate giving feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?" id="pcof_affect_teaching_3" type="radio" required="required" class="custom-control-input" value="Giving feedback using the PCOF is neither unpleasant nor enjoyable (neutral)"> 
              <label for="pcof_affect_teaching_3" class="custom-control-label">Giving feedback using the PCOF is neither unpleasant nor enjoyable (neutral)</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?" id="pcof_affect_teaching_4" type="radio" required="required" class="custom-control-input" value="I enjoy giving feedback using the PCOF"> 
              <label for="pcof_affect_teaching_4" class="custom-control-label">I enjoy giving feedback using the PCOF</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How does using the PCOF affect how much you enjoy teaching communication skills?" id="pcof_affect_teaching_5" type="radio" required="required" class="custom-control-input" value="Giving feedback using the PCOF is gratifying"> 
              <label for="pcof_affect_teaching_5" class="custom-control-label">Giving feedback using the PCOF is gratifying</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>How specific are you in how you teach and offer feedback about communication skills?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?" id="specific_teach_0" type="radio" required="required" class="custom-control-input" value="My vocabulary to describe communication skills is very limited"> 
              <label for="specific_teach_0" class="custom-control-label">My vocabulary to describe communication skills is very limited</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?" id="specific_teach_1" type="radio" required="required" class="custom-control-input" value="I have a few expressions/terms to describe communication skills"> 
              <label for="specific_teach_1" class="custom-control-label">I have a few expressions/terms to describe communication skills</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?" id="specific_teach_2" type="radio" required="required" class="custom-control-input" value="I am able to describe common communication skills"> 
              <label for="specific_teach_2" class="custom-control-label">I am able to describe common communication skills</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?" id="specific_teach_3" type="radio" required="required" class="custom-control-input" value="I can describe communication skills that apply to most situations"> 
              <label for="specific_teach_3" class="custom-control-label">I can describe communication skills that apply to most situations</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="How specific are you in how you teach and offer feedback about communication skills?" id="specific_teach_4" type="radio" required="required" class="custom-control-input" value="I can be articulate and specific in describing a wide range of communication skills"> 
              <label for="specific_teach_4" class="custom-control-label">I can be articulate and specific in describing a wide range of communication skills</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Please rate your comfort using patient centered communication skills in your own clinical practice</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice" id="rate_comfort_0" type="radio" required="required" class="custom-control-input" value="Very uncomfortable"> 
              <label for="rate_comfort_0" class="custom-control-label">Very uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice" id="rate_comfort_1" type="radio" required="required" class="custom-control-input" value="Somewhat uncomfortable"> 
              <label for="rate_comfort_1" class="custom-control-label">Somewhat uncomfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice" id="rate_comfort_2" type="radio" required="required" class="custom-control-input" value="Comfortable"> 
              <label for="rate_comfort_2" class="custom-control-label">Comfortable</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice" id="rate_comfort_3" type="radio" required="required" class="custom-control-input" value="Comfortable and confident"> 
              <label for="rate_comfort_3" class="custom-control-label">Comfortable and confident</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="Please rate your comfort using patient centered communication skills in your own clinical practice" id="rate_comfort_4" type="radio" required="required" class="custom-control-input" value="Highly comfortable and adaptive"> 
              <label for="rate_comfort_4" class="custom-control-label">Highly comfortable and adaptive</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?</label> 
        <div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[0]" id="check_skills_use_0" type="checkbox" class="custom-control-input" value="Establishes Rapport"> 
              <label for="check_skills_use_0" class="custom-control-label">Establishes Rapport</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[1]" id="check_skills_use_1" type="checkbox" class="custom-control-input" value="Maintains Relationship Throughout the Visit"> 
              <label for="check_skills_use_1" class="custom-control-label">Maintains Relationship Throughout the Visit</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[2]" id="check_skills_use_2" type="checkbox" class="custom-control-input" value="Collaborative upfront agenda setting"> 
              <label for="check_skills_use_2" class="custom-control-label">Collaborative upfront agenda setting</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[3]" id="check_skills_use_3" type="checkbox" class="custom-control-input" value="Maintains Efficiency using transparent (out loud) thinking and respectful interruption:" > 
              <label for="check_skills_use_3" class="custom-control-label">Maintains Efficiency using transparent (out loud) thinking and respectful interruption:</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[4]" id="check_skills_use_4" type="checkbox" class="custom-control-input" value="Gathering Information"> 
              <label for="check_skills_use_4" class="custom-control-label">Gathering Information</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[5]" id="check_skills_use_5" type="checkbox" class="custom-control-input" value="Assessing Patient or Family Perspective on Health"> 
              <label for="check_skills_use_5" class="custom-control-label">Assessing Patient or Family Perspective on Health</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[6]" id="check_skills_use_6" type="checkbox" class="custom-control-input" value="Electronic Medical Record Use"> 
              <label for="check_skills_use_6" class="custom-control-label">Electronic Medical Record Use</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[7]" id="check_skills_use_7" type="checkbox" class="custom-control-input" value="Physical Exam"> 
              <label for="check_skills_use_7" class="custom-control-label">Physical Exam</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[8]" id="check_skills_use_8" type="checkbox" class="custom-control-input" value="Sharing Information"> 
              <label for="check_skills_use_8" class="custom-control-label">Sharing Information</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[9]" id="check_skills_use_9" type="checkbox" class="custom-control-input" value="Behavior Change/Self Management"> 
              <label for="check_skills_use_9" class="custom-control-label">Behavior Change/Self Management</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[10]" id="check_skills_use_10" type="checkbox" class="custom-control-input" value="Co-creating a plan"> 
              <label for="check_skills_use_10" class="custom-control-label">Co-creating a plan</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[11]" id="check_skills_use_11" type="checkbox" class="custom-control-input" value="Closure"> 
              <label for="check_skills_use_11" class="custom-control-label">Closure</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="From the list below, please check the skills that you use regularly in most patient visits(check as many as apply)?[12]" id="check_skills_use_12" type="checkbox" class="custom-control-input" value="N/A"> 
              <label for="check_skills_use_12" class="custom-control-label">N/A</label>
            </div>
          </div>
        </div>
      </div> 
      <div class="form-group">
        <button  type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection