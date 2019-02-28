<?php

include "includes/helpers/helpers.php";

$patterns['footer']['classes'] = array('site-footer-min');

$patterns['start']['title'] = 'RN: Emergency Skills Self-Assessment';
$patterns['header']['classes'] = array('site-header-min');




$patterns['footer']['classes'] = array('site-footer-min');

?>
<?= createSiteStart($patterns['start']); ?>
<div class="no-focus">
<?= createHeader($patterns['header']); ?>

<?= createFocus($patterns['focus']); ?>
</div>
<style>


</style>
<div class="layout layout-min">

    <div class="container">
       <section class="section section-main section-box" data-equalize="layout-columns">
        <div class="row">

            <div class="col-md-9"  style="border-right: 1px solid #ddd;">

                <h1>RN: Emergency Assessment</h1>

                <section class="hidden-lg hidden-md section section-progress">
                    <div class="skills-progress">
                        <h3>Progress <small>(60 of 152 skills answered)</small></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:40%">40%</div>
                        </div>
                    </div>


                </section>

                <section class="section">
<form id="ka-form" data-toggle="validator">
    <div class="question" id="3f61c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 1 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>An 80-year-old male with a history of chronic renal failure presents with shortness of breath and swollen legs. Which of the following medications should the emergency nurse expect to administer?</div>
        </div>

        <input name="answers[39].QuestionInstanceId" type="hidden" value="3f61c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="question1" id="question1" required="required" type="radio" value="5">a. Amiodarone</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="question1" required="required" type="radio" value="5">b. Furosemide</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="question1" required="required" type="radio" value="5">c. Lisinopril</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="question1" required="required" type="radio" value="5">d. Metoprolol</label>
        </div>
    </div>
    <div class="question" id="4961c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 2 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>Respiratory function is altered in a 15-year-old male patient with asthma. Which of the following is the cause of this alteration?</div>
        </div>
        <input name="answers[38].QuestionInstanceId" type="hidden" value="4961c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[38].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Altered surfactant production</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[38].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Continuous changes in respiratory rate and depth</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[38].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Increased airway resistance</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[38].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Paradoxical movement of the chest wall</label>
        </div>
    </div>
    <div class="question" id="5361c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 3 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A 12-month-old male patient presents to the Emergency Department with a history of 15-minute intervals of inconsolable crying accompanied by drawing his legs up toward his abdomen. He vomited once and there is blood noted in his stool. What diagnosis is most likely?</div>
        </div>
        <input name="answers[37].QuestionInstanceId" type="hidden" value="5361c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[37].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Appendicitis</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[37].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Gastroenteritis</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[37].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Intussusception</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[37].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Testicular torsion</label>
        </div>
    </div>
    <div class="question" id="5d61c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 4 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A classic characteristic of tension pneumothorax is:</div>
        </div>
        <input name="answers[36].QuestionInstanceId" type="hidden" value="5d61c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[36].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. acute epigastric pain.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[36].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. hypertension.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[36].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. hypotension.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[36].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. neck or jaw pain.</label>
        </div>
    </div>
    <div class="question" id="6761c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 5 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A 16-year-old patient has a history of bronchial asthma and has experienced severe asthma attacks throughout the year. He is brought into the emergency department having an episode of status asthmaticus. He is first given oxygen and nebulized albuterol via intermittent metered-dose inhaler (MDI) - 2 spaced puffs every 5 minutes for 30 minutes. This treatment works to relieve status asthmaticus by:</div>
        </div>
        <input name="answers[35].QuestionInstanceId" type="hidden" value="6761c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[35].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. reducing inflammation.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[35].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. reducing vagally-mediated bronchospasm.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[35].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. relaxing bronchial smooth muscles.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[35].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. restoring beta-adrenergic responsiveness.</label>
        </div>
    </div>
    <div class="question" id="7161c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 6 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A 24-year-old male patient presents to the Emergency Department with a hand injury caused by a high-pressure paint gun. He has a small hole on the palm of the hand surrounded by mild erythema and swelling. He is neurovascularly intact and the bleeding is controlled. Which of the following treatment plan should the emergency nurse anticipate?</div>
        </div>
        <input name="answers[34].QuestionInstanceId" type="hidden" value="7161c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[34].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Admit for IV antibiotics.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[34].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Discharge with oral antibiotics.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[34].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Discharge with a 24-hour wound check.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[34].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Perform urgent surgical debridement.</label>
        </div>
    </div>
    <div class="question" id="7b61c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 7 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A 28-year-old male patient presents to the Emergency Department reporting a sudden onset of right-sided chest pain that is worse with taking a deep breath, in addition to a frequent dry cough. He has diminished lung sounds on the right side and jugular venous distension. His heart rate is 120, his respiratory rate is 28, his blood pressure is 88/42, and his oxygen saturation is 90%. The emergency nurse suspects:</div>
        </div>
        <input name="answers[33].QuestionInstanceId" type="hidden" value="7b61c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[33].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. pleural effusion.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[33].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. pneumonia with sepsis.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[33].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. pulmonary embolism.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[33].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. tension pneumothorax.</label>
        </div>
    </div>
    <div class="question" id="8561c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 8 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>Thrombolytic therapy for a cerebral vascular accident (CVA) must be administered within how many hours of the documented onset of the CVA?</div>
        </div>
        <input name="answers[32].QuestionInstanceId" type="hidden" value="8561c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[32].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. 1.5 hours</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[32].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. 3 hours</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[32].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. 6 hours</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[32].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. 12 hours</label>
        </div>
    </div>
    <div class="question" id="8f61c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 9 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A 6-year-old female presents with her mother reporting several episodes of diarrhea over the last 24 hours, temperature of 100.8° F, and generalized body aches. The symptoms started about 12 hours after attending a birthday party and two other children who attended the party have similar symptoms. Her mucous membranes are moist, she is mildly tachycardic, and her blood pressure is normal. What treatment should the emergency nurse anticipate initiating?</div>
        </div>
        <input name="answers[31].QuestionInstanceId" type="hidden" value="8f61c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[31].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Ciprofloxacin</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[31].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. IV fluids</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[31].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Metronidazole</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[31].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Oral rehydration solution</label>
        </div>
    </div>
    <div class="question" id="9961c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 10 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>Which of the following could cause further deterioration of a patient with hypovolemic shock?</div>
        </div>
        <input name="answers[30].QuestionInstanceId" type="hidden" value="9961c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[30].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Acetaminophen</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[30].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Hyperlipidemia</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[30].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Hypothermia</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[30].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Packed red blood cell (PRBC) administration</label>
        </div>
    </div>
    <div class="question" id="a361c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 11 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A pregnant female is at 34 weeks’ gestation and is diagnosed with a placental abruption. For what blood dyscrasia is this patient at risk?</div>
        </div>
        <input name="answers[29].QuestionInstanceId" type="hidden" value="a361c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[29].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Disseminated intravascular coagulation</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[29].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Idiopathic thrombocytopenic purpura</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[29].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Thrombocytosis</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[29].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Von Willebrand disease</label>
        </div>
    </div>
    <div class="question" id="ad61c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 12 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>What are symptoms of a fracture?</div>
        </div>
        <input name="answers[28].QuestionInstanceId" type="hidden" value="ad61c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[28].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Absence of abnormal sensation and edema</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[28].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Equal pulses, no discoloration</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[28].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Excessive perspiration of the affected limb</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[28].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Pain in the injured area that worsens with movement or pressure</label>
        </div>
    </div>
    <div class="question" id="b761c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 13 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A patient admitted within the past 12 hours because of suicidal ideation now states that she feels fine, no longer has the desire to commit suicide, and is ready for discharge. The nurse knows that the patient:</div>
        </div>
        <input name="answers[27].QuestionInstanceId" type="hidden" value="b761c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[27].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. has worked through the suicidal ideation but needs daily follow-up.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[27].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. is delusional and requires antipsychotic medication.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[27].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. remains at risk for suicide and further assessment is needed.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[27].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. should be discharged immediately before developing recurrent suicidal ideation.</label>
        </div>
    </div>
    <div class="question" id="c161c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 14 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>The patient reports having a severe headache when taking nitroglycerin (Nitrostat®) for angina. The nurse tells the patient that the headache is caused by:</div>
        </div>
        <input name="answers[26].QuestionInstanceId" type="hidden" value="c161c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[26].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. aura prior to a migraine headache.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[26].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. hypoglyemia.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[26].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. vasoconstriction of the cerebral arteries.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[26].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. vasodilation of the cerebral arteries.</label>
        </div>
    </div>
    <div class="question" id="cb61c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 15 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A 76-year-old male patient is being evaluated for a cough and fever of 101° F. His heart rate is 116, his blood pressure is 88/40, and his oxygen saturation is 92%. His laboratory studies show a white blood cell count of 21,000 and a lactic acid of 4.8; his chest x-ray shows a right lower lobe infiltrate. What is the most appropriate diagnosis for this patient?</div>
        </div>
        <input name="answers[25].QuestionInstanceId" type="hidden" value="cb61c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[25].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Sepsis</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[25].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Septic shock</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[25].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Severe sepsis</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[25].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Systemic inflammatory response syndrome</label>
        </div>
    </div>
    <div class="question" id="d561c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 16 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>What is the most common cause of neurogenic shock?</div>
        </div>
        <input name="answers[24].QuestionInstanceId" type="hidden" value="d561c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[24].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Dehydration</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[24].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Head injury</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[24].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Spinal cord injury</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[24].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Viral infection</label>
        </div>
    </div>
    <div class="question" id="df61c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 17 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A 30-year-old female patient who is 32 weeks pregnant has been diagnosed with preeclampsia and has proteinuria and headaches. The provider orders an infusion of 4 grams of magnesium sulfate over 15 minutes. The purpose of giving the magnesium sulfate to this patient is to:</div>
        </div>
        <input name="answers[23].QuestionInstanceId" type="hidden" value="df61c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[23].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. correct electrolyte imbalance.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[23].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. inhibit labor.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[23].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. prevent seizures.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[23].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. reduce blood pressure.</label>
        </div>
    </div>
    <div class="question" id="e961c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 18 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>Traumatic dislocations are treated as orthopedic emergencies because of the risk of decreased blood supply and tissue death, also known as:</div>
        </div>
        <input name="answers[22].QuestionInstanceId" type="hidden" value="e961c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[22].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. avascular necrosis.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[22].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. compartment syndrome.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[22].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. nerve palsy syndrome.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[22].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. neuropathy.</label>
        </div>
    </div>
    <div class="question" id="f361c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 19 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>Patients with anorexia nervosa will usually exhibit:</div>
        </div>
        <input name="answers[21].QuestionInstanceId" type="hidden" value="f361c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[21].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. a positive self-image and high self-esteem.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[21].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. episodes of overeating and slow but progressive weight gain.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[21].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. refusal to discuss food-related topics.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[21].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. weight loss due to self-imposed dietary restrictions.</label>
        </div>
    </div>
    <div class="question" id="fd61c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 20 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>Which infection often coexists in patients with <i>Neisseria gonorrhoeae</i>?</div>
        </div>
        <input name="answers[20].QuestionInstanceId" type="hidden" value="fd61c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[20].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. <i>Candida albicans</i></label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[20].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. <i>Chlamydia trachomatis</i></label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[20].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Endometriosis</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[20].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Syphilis</label>
        </div>
    </div>
    <div class="question" id="0762c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 21 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>An 8-month-old male patient is diagnosed with acute otitis media. In addition to the antibiotics that the provider prescribed, the parents ask about the correct dose of acetaminophen. The emergency nurse knows that the appropriate dose for acetaminophen for pediatric patients is:</div>
        </div>
        <input name="answers[19].QuestionInstanceId" type="hidden" value="0762c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[19].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. 5-10 mg/kg.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[19].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. 10-15 mg/kg.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[19].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. 160 mg.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[19].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. 325 mg.</label>
        </div>
    </div>
    <div class="question" id="1162c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 22 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A 32-year-old female patient reports a burning sensation when urinating, frequent urination, and urgency. Her vital signs are stable and she has no fever. The most likely diagnosis is:</div>
        </div>
        <input name="answers[18].QuestionInstanceId" type="hidden" value="1162c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[18].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. cystitis.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[18].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. pyelonephritis.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[18].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. ureteral calculus.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[18].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. vaginitis.</label>
        </div>
    </div>
    <div class="question" id="1b62c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 23 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>When a patient is admitted into the emergency room with a suspected fracture of the cervical spine, what is the nurse's priority?</div>
        </div>
        <input name="answers[17].QuestionInstanceId" type="hidden" value="1b62c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[17].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Administer narcotics.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[17].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Document any neurological deficits.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[17].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Immobilize the cervical spine.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[17].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Page the neurologist on call.</label>
        </div>
    </div>
    <div class="question" id="2562c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 24 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A 55-year-old man has recently been diagnosed with hypertension. The provider orders a low-sodium diet for the patient. What should the nurse’s initial response be when the patient asks, “What does salt have to do with high blood pressure?”</div>
        </div>
        <input name="answers[16].QuestionInstanceId" type="hidden" value="2562c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[16].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. “Salt affects your blood vessels and causes your blood pressure to be high.”</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[16].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. “Salt is needed to maintain blood pressure, but too much will cause hypertension.”</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[16].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. “The reason too much sodium is associated with hypertension is unknown.”</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[16].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. “Too much salt in your diet can cause you to retain fluid, and that increases your blood pressure.”</label>
        </div>
    </div>
    <div class="question" id="2f62c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 25 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A 24-year-old female firefighter was brought to the Emergency Department from a fire scene reporting headache, dizziness, chest pain, nausea, and tachycardia. Her heart rate is 128, her blood pressure is 92/40, and her oxygen saturation is 100%. The emergency nurse places the patient on a high-flow tight fitting oxygen mask. About what condition is the emergency nurse most concerned?</div>
        </div>
        <input name="answers[15].QuestionInstanceId" type="hidden" value="2f62c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[15].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Acute coronary syndrome</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[15].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Carbon monoxide poisoning</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[15].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Dehydration</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[15].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Shock</label>
        </div>
    </div>
    <div class="question" id="3962c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 26 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>After Sue discovered that she was going to hospice, she stated, “I just want to die. I am a burden to everyone. I just can’t do this anymore; I wish I had a gun.” Sue's comments are signs of:</div>
        </div>
        <input name="answers[14].QuestionInstanceId" type="hidden" value="3962c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[14].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. altered mental status.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[14].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. anxiety.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[14].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. depression.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[14].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. fear.</label>
        </div>
    </div>
    <div class="question" id="4362c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 27 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>With which type of burn will the patient no longer feel pain at the burn site?</div>
        </div>
        <input name="answers[13].QuestionInstanceId" type="hidden" value="4362c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[13].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Epidermal thickness</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[13].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Full thickness</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[13].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Partial thickness</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[13].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Superficial</label>
        </div>
    </div>
    <div class="question" id="4d62c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 28 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>Which of the following measures will help to prevent the development of pressure ulcers on a bed-bound patient?</div>
        </div>
        <input name="answers[12].QuestionInstanceId" type="hidden" value="4d62c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[12].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Eliminate additional high protein supplemental feedings.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[12].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Exclude the application of lotion after bathing the patient.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[12].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Massage skin areas at risk for pressure ulcer development.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[12].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Reposition the patient to reduce exposure to pressure.</label>
        </div>
    </div>
    <div class="question" id="5762c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 29 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>With which patient is rapid sequence intubation most useful?</div>
        </div>
        <input name="answers[11].QuestionInstanceId" type="hidden" value="5762c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[11].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. A patient in restraints</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[11].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. A patient scheduled for routine surgery</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[11].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. A patient with a tracheostomy</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[11].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. A patient with tracheal damage but the potential for aspiration</label>
        </div>
    </div>
    <div class="question" id="6162c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 30 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>Which laboratory study is most important for the determination of both the most appropriate treatment regimen and the assessment of the effectiveness of treatment for a patient with infectious endocarditis?</div>
        </div>
        <input name="answers[10].QuestionInstanceId" type="hidden" value="6162c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[10].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Blood cultures</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[10].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Complete blood count (CBC)</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[10].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. D-dimer</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[10].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Erythrocyte sedimentation rate (ESR)</label>
        </div>
    </div>
    <div class="question" id="6b62c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 31 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>Graves disease, the most common form of hyperthyroidism, is characterized by:</div>
        </div>
        <input name="answers[9].QuestionInstanceId" type="hidden" value="6b62c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[9].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. bradycardia and hypertension.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[9].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. cold intolerance and emotional lability.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[9].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. exophthalmos and pretibial myxedema.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[9].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. periorbital puffiness and coarse facial features.</label>
        </div>
    </div>
    <div class="question" id="7562c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 32 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>An 18-year-old girl is admitted to the hospital with a depressed skull fracture as a result of a car accident. If the patient exhibited a rising pulse rate and lowering blood pressure, the nurse would suspect that the patient is:</div>
        </div>
        <input name="answers[8].QuestionInstanceId" type="hidden" value="7562c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[8].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. beginning to experience a dangerously high level of anxiety.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[8].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. having a sudden and severe increase in intracranial pressure.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[8].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. having intracranial bleeding.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[8].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. showing signs of an internal injury in addition to the head injury.</label>
        </div>
    </div>
    <div class="question" id="7f62c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 33 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A 36-year-old female presents to the Emergency Department reporting pelvic pain that started several hours ago, dizziness, and left shoulder pain. Her heart rate is 128 beats per minute and her blood pressure is 100/52; a urine pregnancy test is positive. The provider should immediately evaluate this patient for:</div>
        </div>
        <input name="answers[7].QuestionInstanceId" type="hidden" value="7f62c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[7].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. abortion.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[7].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. ectopic pregnancy.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[7].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. ovarian cyst.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[7].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. pelvic inflammatory disease.</label>
        </div>
    </div>
    <div class="question" id="8962c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 34 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>Nitroglycerin (Nitrostat®) is administered for anginal attacks because it causes:</div>
        </div>
        <input name="answers[6].QuestionInstanceId" type="hidden" value="8962c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[6].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. coronary artery constriction and peripheral venous constriction.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[6].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. coronary artery constriction and peripheral venous dilation.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[6].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. coronary artery dilation and peripheral venous constriction.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[6].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. coronary artery dilation and peripheral venous dilation.</label>
        </div>
    </div>
    <div class="question" id="9362c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 35 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>A 62-year-old male patient presents to the Emergency Department complaining of sudden, severe pain in the heel that started while walking up the stairs. He is now having difficulty walking and is unable to plantar flex his foot against resistance. Which of this patient’s medications is likely to be responsible for his condition?</div>
        </div>
        <input name="answers[5].QuestionInstanceId" type="hidden" value="9362c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[5].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Atorvastatin</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[5].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Diltiazem</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[5].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Levofloxacin</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[5].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Metoprolol</label>
        </div>
    </div>
    <div class="question" id="9d62c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 36 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>The tympanic membrane is found in the:</div>
        </div>
        <input name="answers[4].QuestionInstanceId" type="hidden" value="9d62c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[4].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. brain.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[4].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. ear.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[4].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. peritoneum.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[4].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. uterus.</label>
        </div>
    </div>
    <div class="question" id="a762c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 37 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>________________ conjunctivitis, also called “pink eye”, will resolve within a week with the use of antibiotic drops.</div>
        </div>
        <input name="answers[3].QuestionInstanceId" type="hidden" value="a762c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[3].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Allergic</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[3].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Bacterial</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[3].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Fungal</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[3].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Toxic</label>
        </div>
    </div>
    <div class="question" id="b162c753-1bb8-e711-8003-005056b106db">
        <div class="question-header">
            <h2>Question 38 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>Within an hour of overdosing on phenobarbital capsules, a patient is brought into the emergency room. What is the nurse's first action?</div>
        </div>
        <input name="answers[2].QuestionInstanceId" type="hidden" value="b162c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[2].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">a. Administer calcium intravenously.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[2].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">b. Administer sodium bicarbonate via nasogastric tube.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[2].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">c. Assign a social worker to the case.</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[2].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">d. Perform gastric lavage.</label>
        </div>
    </div>
    <div class="question">
        <div class="question-header">
            <h2>Question 39 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>Patients who have advance directives may receive pain medication when it is needed.</div>
        </div>
        <input name="answers[1].QuestionInstanceId" type="hidden" value="bb62c753-1bb8-e711-8003-005056b106db">
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[1].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">True</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="answers[1].Responses[0].AnswerInstanceId" required="required" type="radio" value="5">False</label>
        </div>
    </div>
    <div class="question">
        <div class="question-header">
            <h2>Question 40 <small>of 40 </small><span class="label label-warning">Required Question</span></h2>
            <div>With which of the following is hypovolemia most commonly treated?</div>
        </div>
        <input name="answers[0].QuestionInstanceId" type="hidden" >
        <div class="answers">
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="question40" required="required" type="radio" value="5">a. Dopamine</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="question40" required="required" type="radio" value="5">b. Intravenous crystalloids</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="question40" required="required" type="radio" value="5">c. Packed red blood cells (PRBC)</label>
            <label class="answer">
                <div class="answer-icon"></div>
                <input name="question40" required="required" type="radio" value="5">d. Rapid plasma infusion</label>
        </div>
    </div>
        <section class="section">
            <div class="form-group">
                <button class="btn btn-success btn-submit" type="submit" id="submit-evaluation">Complete Assessment</button>
            </div>
        </section>

        </form>
</section>


            </div><!-- /column -->
            <div class="col-md-3 hidden-sm hidden-xs">
                <section class="section section-progress">
                    <div class="skills-progress">
                        <h3 >Progress <small>(16 of 40 questions answered)</small></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:40%">40%</div>
                        </div>
                    </div>
                </section>
            </div>

        </section><!-- /section-main -->

    </div><!-- /row -->
</div><!-- /container -->
</div><!-- /layout -->



<?= createFooter($patterns['footer']); ?>
<?= createPrototypeNav(); ?>
<?= createSiteScripts(); ?>
<script>
    $(".btn-submit").click(function(e) {
        e.preventDefault();
        $(".answers input['type=hood']").each(function(){
            if (!$(this).val()) {
                $(this).closest(".label-warning").show();
                $(this).closest(".question").addClass("error");

            }
            // else{
            //   window.location.assign("/knowledge-feedback.php")
            // }
        });
    });




    var elementPosition = $('.section-progress:visible').offset();

    //scroll to chosen filter
    $(window).scroll(function() {

        var elementWidth = $('.section-progress:visible').parent().width();

        if ($(window).scrollTop() > elementPosition.top) {
            $('.section-progress:visible').css({'position': 'fixed', 'top': '0', 'width' : elementWidth,  'margin-top': '0', 'z-index': '5'});
            $('form').css({'margin-top': '145px', 'display':'block'});
            $('.stickybar').css('padding-top', '90px');
        } else {
            $('.section-progress:visible').css({'position': 'static', 'width' : 'auto'});
            $('form').css({'margin-top': 'auto', 'display':'inline'});

        }

        $(window).resize();

    });

</script>
<?= createSiteEnd(); ?>
