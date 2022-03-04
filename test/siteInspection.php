<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Site Inspection</title>
</head>
<body>
    <div class ="header">
        <div><a class = "header_links"href="/test/sign_in.php">Home</a></div>
        <div><a class = "header_links"href="#">About</a></div>
        <div><a class = "header_links"href="#">Services</a></div>
        <div><a class = "header_links"href="#">Careers</a></div>
        <div><a class = "header_links"href="#">Contacts</a></div>
    </div>

    <div class ="inspection_info">
        <div id="inspec_top">
                <input class = "input_edit" type="text" name="site_area" id="site_area" placeholder="Site Area:">
                <input class = "input_edit" type="text" name="supervisor" id="supervisor" placeholder="Supervisor:">
                <input class = "input_edit" type="text" name="company_name" id="company_name" placeholder="Company's Name:">
        </div>
        <div id="inspec_bottom">
                <input class = "input_edit" type="text" name="inspection_date" id="inspection_date" placeholder="Inspection Date:">
                <input class = "input_edit" type="text" name="inspection_type" id="inspection_type" placeholder="Inspection Type:">
                <input class = "input_edit" type="text" name="job_description" id="job_description" placeholder="Job Description:">
        </div>
    </div>
    
    <div class = "whole_form">
        <div class="inspection_form" id="working_standards">
                <div class="form_header">A. Working Standard:</div>
                <div class="form_body">
                    <div class= "rows_table" id="wAH">
                        <div class = "params" id="wAHParam">1. Work at Height</div>
                        <div id="wAHintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="wAHcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="wAHcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="wAHaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitwAH" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="lop">
                        <div class = "params" id="lopParam">2. Lifting Operations - Crane, Fork Lift Truck etc.</div>
                        <div id="lopintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="lopcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="lopcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="lopaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitlop" class="addImage">Add Image</button>

                    </div>
                    <div class= "rows_table" id="certification">
                        <div class = "params" id="certParam">3. Certification - Daily Checksheets for MEWP and FLT</div>
                        <div id="certintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="certcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="certcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="certaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitcert" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="csw">
                        <div class = "params" id="cswParam">4. Confined Space Work</div>
                        <div id="cswintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="cswcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="cswcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="cswaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitcsw" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="ew">
                        <div class = "params" id="ewParam">5. Electrical Works</div>
                        <div id="ewintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="ewcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="ewcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="ewaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitew" class="addImage">Add Image</button>
                    </div>


                </div>
        </div>
        <div class="inspection_form" id="quality">
                <div class="form_header">B. Quality:</div>
                <div class="form_body">
                <div class= "rows_table" id="wAH">
                        <div class = "params" id="wAHParam">6. Site Set Up & Appearance, Signage</div>
                        <div id="wAHintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="wAHcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="wAHcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="wAHaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitwAH" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="paperqua">
                        <div class = "params" id="paperquaParam">7. Paperwork(Permits, Risk, Assessments, Method Statement)</div>
                        <div id="paperquaintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="paperquacomment"><input type ="text" placeholder="Comments"></div>
                        <div id="paperquacompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="paperquaaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitpaperqua" class="addImage">Add Image</button>

                    </div>
                    <div class= "rows_table" id="certqua">
                        <div class = "params" id="certquaParam">8. Certification - Training, Insurance Inspection, Induction Current</div>
                        <div id="certquaintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="certquacomment"><input type ="text" placeholder="Comments"></div>
                        <div id="certuacompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="certquaaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitcertqua" class="addImage">Add Image</button>
                    </div>
                </div>
        </div>
        <div class="inspection_form" id="site_rules">
                <div class="form_header">C. Site Rules:</div>
                <div class="form_body">
                <div class= "rows_table" id="hotw">
                        <div class = "params" id="hotwParam">9. Hot Work</div>
                        <div id="hotwintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="hotwcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="hotwcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="hotwaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submithotw" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="isolof">
                        <div class = "params" id="isolofParam">10. Isolation and Lock Offs</div>
                        <div id="isolofintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="isolofcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="isolofcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="isolofaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitisolof" class="addImage">Add Image</button>

                    </div>
                    <div class= "rows_table" id="srfireex">
                        <div class = "params" id="srfireexParam">11. Fire Exits and Escape Routes</div>
                        <div id="srfireexintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="srfireexcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="srfireexcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="srfireexaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitsrfireex" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="sraware">
                        <div class = "params" id="srawareParam">12. Awareness - Fire Exit, Assembly Point</div>
                        <div id="srawareintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="srawarecomment"><input type ="text" placeholder="Comments"></div>
                        <div id="srawarecompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="srawareaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitsraware" class="addImage">Add Image</button>
                    </div>
                </div>
        </div>
        <div class="inspection_form" id="environmental">
                <div class="form_header">D. Environmentals:</div>
                <div class="form_body">
                    <div class= "rows_table" id="waste">
                        <div class = "params" id="wasteParam">13. Waste Management</div>
                        <div id="wasteintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="wastecomment"><input type ="text" placeholder="Comments"></div>
                        <div id="wastecompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="wasteaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitwaste" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="productcon">
                        <div class = "params" id="productconParam">14. Product Contamination</div>
                        <div id="productconintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="productconcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="productconcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="productconaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitproductcon" class="addImage">Add Image</button>

                    </div>
                    <div class= "rows_table" id="cosh">
                        <div class = "params" id="coshParam">15. COSHH & Asbestos</div>
                        <div id="coshintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="coshcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="coshcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="coshaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitcosh" class="addImage">Add Image</button>
                    </div>
                </div>
        </div>
        <div class="inspection_form" id="protection">
                <div class="form_header">E. Protection Of Individuals:</div>
                <div class="form_body">
                    <div class= "rows_table" id="ppe">
                        <div class = "params" id="ppeParam">16. PPE</div>
                        <div id="ppeintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="ppecomment"><input type ="text" placeholder="Comments"></div>
                        <div id="ppecompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="ppeaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitppe" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="manualhandling">
                        <div class = "params" id="manualhandlingParam">17. Manual Handling</div>
                        <div id="manualhandlingintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="manualhandlingcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="manualhandlingcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="manualhandlingaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitmanualhandling" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="othercontractors">
                            <div class = "params" id="othercontractorsParam">18. Other Contractors</div>
                        <div id="othercontractorsintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="othercontractorscomment"><input type ="text" placeholder="Comments"></div>
                        <div id="othercontractorscompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="othercontractorsaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitothercontractors" class="addImage">Add Image</button>
                    </div>   
                </div>
        </div>
        <div class="inspection_form" id="tools_cables">
                <div class="form_header">F. Tools, Cables & other Equipments:</div>
                <div class="form_body">
                <div class= "rows_table" id="powtool">
                        <div class = "params" id="powtoolParam">19. Power Tools, Cables and Other Equipments</div>
                        <div id="powtoolintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="powtoolcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="powtoolcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="powtoolaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitpowtool" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="voltdet">
                        <div class = "params" id="voltdetParam">20. Voltage Detector Checked</div> 
                        <div id="voltdetintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="voltdetcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="voltdetcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="voltdetaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitvoltdet" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="toolsusedfit">
                            <div class = "params" id="toolsusedfitParam">21. Tools Used Fit for Purpose</div>
                        <div id="toolsusedfitintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="toolsusedfitcomment"><input type ="text" placeholder="Comments"></div>
                        <div id="toolsusedfitcompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="toolsusedfitaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submittoolsusedfit" class="addImage">Add Image</button>
                    </div>   
                </div>
        </div>
        <div class="inspection_form" id="miscellaneous">
                <div class="form_header">G. Miscellaneous:</div>
                <div class="form_body">
                    <div class= "rows_table" id="companyvehicles">
                        <div class = "params" id="companyvehiclesParam">22. Company Vehicles</div>
                        <div id="companyvehiclesintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="companyvehiclescomment"><input type ="text" placeholder="Comments"></div>
                        <div id="companyvehiclescompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="companyvehiclesaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitcompanyvehicles" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="fireprec">
                        <div class = "params" id="fireprecParam">22. Fire Precautions</div>
                        <div id="fireprecintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="firepreccomment"><input type ="text" placeholder="Comments"></div>
                        <div id="firepreccompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="fireprecaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitfireprec" class="addImage">Add Image</button>
                    </div>
                    <div class= "rows_table" id="workshopcondi">
                            <div class = "params" id="workshopcondiParam">23. Workshop Conditions</div>
                        <div id="workshopcondiintervention" class = "interbox"><input type ="text" placeholder="Interventions"></div>
                        <div id="workshopcondicomment"><input type ="text" placeholder="Comments"></div>
                        <div id="workshopcondicompleted"><input type ="text" placeholder="Completed"></div>
                        <div id="workshopcondiaction"><input type ="text" placeholder="Action Taken"></div>
                        <button id="submitworkshopcondi" class="addImage">Add Image</button>
                    </div>   
                </div>
        </div>
        <div id="preview">
            <button class="preview_btn">Preview</button>
        </div>
    </div>
        
    <?php

    ?>
    
</body>
</html>