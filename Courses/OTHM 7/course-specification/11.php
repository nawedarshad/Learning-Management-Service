<?php

include("../header.php");
if (!isset($_SESSION["isLogin"])) {
    header("Location: ../../../login.php");
    exit();
}
?>

<!-- In Bootstrap 5, utility classes for background and padding have changed slightly -->
<div class="d-flex flex-column container-fluid" style="padding-top:100px; width:90vw;" id="content">
    <div style="width: 70vw;">
        <div style="border: solid 2px darkgreen; border-radius:20px; font-size: 1.3rem;" class="p-5">
            <div>
                <h2>Unit 6 - Learning outcomes and assessment criteria</h2>
            </div>
            <hr>
            <div class="MuiCardContent-root"><dd class="ck-content" style="overflow-wrap: anywhere;"><h4>Health and Safety Law, Regulation and Influence</h4><figure class="table"><table style="border-bottom:none;border-left:none;border-right:none;border-top:none;"><tbody><tr><td style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">Unit Reference Number</td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:545.75pt;">H/617/7542</td></tr><tr><td style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.65pt;padding:0cm;vertical-align:top;width:161.35pt;"><span style="color:black;">Unit Title</span></td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.65pt;padding:0cm;vertical-align:top;width:545.75pt;">Health and Safety Law, Regulation and Influence</td></tr><tr><td style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;"><span style="color:black;">Unit Level</span></td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:545.75pt;">6</td></tr><tr><td style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;"><span style="color:black;">Number of Credits</span></td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:545.75pt;">8</td></tr><tr><td style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;"><span style="color:black;">Total Qualification Time (TQT)</span></td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:545.75pt;">80 hours</td></tr><tr><td style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;"><span style="color:black;">Guided Learning Hours (GLH)</span></td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:545.75pt;">35 hours</td></tr><tr><td style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;"><span style="color:black;">Mandatory / Optional</span></td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:545.75pt;">Mandatory</td></tr><tr><td style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.7pt;padding:0cm;vertical-align:top;width:161.35pt;"><span style="color:black;">Unit Grading Structure</span></td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.7pt;padding:0cm;vertical-align:top;width:545.75pt;">Pass / Fail</td></tr></tbody></table></figure><p>&nbsp;</p><h4>Unit Aims</h4><p>This aim of this unit is to is to give learners an understanding of international frameworks for health and safety legislation and regulation, how these frameworks are set, and the subsequent obligations on organisations to comply. The learner will explore the role played by industry, professional bodies and media communities to influence the promotion of positive health and safety outcomes locally, nationally and globally.</p><h4>Learning Outcomes and Assessment Criteria</h4><figure class="table"><table style="border-bottom:none;border-left:none;border-right:none;border-top:none;"><tbody><tr><td style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.3pt;padding:0cm;vertical-align:top;width:139.55pt;">Learning Outcomes- The learne<span style="color:black;">r will:</span></td><td style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.3pt;padding:0cm;vertical-align:top;width:262.75pt;"><span style="color:black;">Assessment Criteria- The learner can:</span></td><td style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.3pt;padding:0cm;vertical-align:top;width:304.8pt;"><span style="color:black;">Indicative Content</span></td></tr><tr><td style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:126.25pt;padding:0cm;vertical-align:top;width:139.55pt;">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Understand international frameworks for&nbsp;legislation, regulation and enforcement.</td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:126.25pt;padding:0cm;vertical-align:top;width:262.75pt;"><ol><li>Outline the role of the International Labour Organisation&nbsp;(ILO).</li><li>Explain how international conventions can be used to set H&amp;S legislation and legislative frameworks.</li><li>Evaluate the benefits and limitations of national legislation in securing organisational health and safety&nbsp;standards.</li><li>Evaluate the effectiveness of a range of national and international health and&nbsp;safety</li></ol></td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:126.25pt;padding:0cm;vertical-align:top;width:304.8pt;"><ul><li>ILO history, background, history of international health and safety regulations, role of legislation and statute, legislative frameworks, relationship to health and safety policy, role of Health and Safety Executive in UK and&nbsp;UK local authorities, information sources for organisations, international benchmarking of standards, enforcement as a principle, role of auditing in securing&nbsp;standards.</li></ul></td></tr></tbody></table></figure><figure class="table"><table style="border-bottom:none;border-left:none;border-right:none;border-top:none;"><tbody><tr><td style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:88.5pt;padding:0cm;vertical-align:top;width:139.55pt;">&nbsp;</td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:88.5pt;padding:0cm;vertical-align:top;width:262.75pt;"><p>bodies to secure health and safety standards.</p><ol><li>Explain the purpose and principles&nbsp;of enforcement on H&amp;S legislation and regulation.</li><li>Review the effectiveness of a range of safety audit techniques against national and international&nbsp;standards.</li></ol></td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:88.5pt;padding:0cm;vertical-align:top;width:304.8pt;">&nbsp;</td></tr><tr><td style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:126.25pt;padding:0cm;vertical-align:top;width:139.55pt;">2.&nbsp;&nbsp;&nbsp; Understand statutory&nbsp;and regulatory obligations for maintaining health and safety in an organisation.</td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:126.25pt;padding:0cm;vertical-align:top;width:262.75pt;"><ol><li>Evaluate statutory and regulatory obligations applicable to an&nbsp;organisation.</li><li>Evaluate workplace health and safety requirements relating to input / output of products, services, contractors, visitors, employees, equipment, goods, materials&nbsp;and other activities of theorganisation.</li><li>Describe in detail the unique organisational challenges to maintain compliance with health and safety&nbsp;regulations.</li></ol></td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:126.25pt;padding:0cm;vertical-align:top;width:304.8pt;"><ul><li>Evaluation of unique organisational HS obligations. Role of QMS (Quality management systems) to underpin organisational HS obligations. Strategies to enforce and implement HS policy. Challenges to implement health and safety policy and maintain compliance. Compliance planning. Reviewing&nbsp;process.</li></ul></td></tr><tr><td style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:151.35pt;padding:0cm;vertical-align:top;width:139.55pt;">3.&nbsp;&nbsp;&nbsp; Understand the industry and community roles in influencing and promoting local and&nbsp;national positive health and safety outcomes.</td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:151.35pt;padding:0cm;vertical-align:top;width:262.75pt;"><ol><li>Outline the function of professional and employer bodies, trade associations, media and community groups and organisational partnerships in influencing and promoting positive health and safety&nbsp;outcomes.</li><li>Outline the ethical and social responsibilities of organisations to develop high standards of health and&nbsp;safety.</li><li>Assess the role of corporate governance and self-regulation in supporting continual improvement of organisational health and safety&nbsp;standards.</li></ol></td><td style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:151.35pt;padding:0cm;vertical-align:top;width:304.8pt;"><ul><li>Communities of influence, organisational engagement/influence in communities of influence, changing nature of communities, eg social media. Ethical and social responsibilities, industry role models, campaigns. Corporate governance, self-regulation, setting targets beyond current standards, continuing and continuous improvement models, sharing and supporting best practice within&nbsp;communities.</li></ul></td></tr></tbody></table></figure><p><strong>Assessment</strong></p><p>To achieve a ‘pass’ for this unit, learners must provide evidence to demonstrate that they have fulfilled all the learning outcomes and meet the standards specified by all assessment criteria.</p><figure class="table"><table style="border-bottom:none;border-left:none;border-right:none;border-top:none;"><tbody><tr><td style="background-color:#F1F1F1;border-bottom:1.0pt solid black;border-left:1.0pt solid black;border-right:1.0pt solid black;border-top:1.0pt solid black;height:25.25pt;padding:0cm;vertical-align:top;width:125.9pt;">Learning Outcomes to be met</td><td style="background-color:#F1F1F1;border-bottom:1.0pt solid black;border-left:1.0pt none black;border-right:1.0pt solid black;border-top:1.0pt solid black;height:25.25pt;padding:0cm;vertical-align:top;width:127.65pt;"><span style="color:black;">Assessment criteria to be covered</span></td><td style="background-color:#F1F1F1;border-bottom:1.0pt solid black;border-left:1.0pt none black;border-right:1.0pt solid black;border-top:1.0pt solid black;height:25.25pt;padding:0cm;vertical-align:top;width:177.2pt;"><span style="color:black;">Type of assessment</span></td><td style="background-color:#F1F1F1;border-bottom:1.0pt solid black;border-left:1.0pt none black;border-right:1.0pt solid black;border-top:1.0pt solid black;height:25.25pt;padding:0cm;vertical-align:top;width:10.0cm;"><span style="color:black;">Assessment parameters</span></td></tr><tr><td style="border-bottom:1.0pt solid black;border-left:1.0pt solid black;border-right:1.0pt solid black;border-top:1.0pt none black;height:12.55pt;padding:0cm;vertical-align:top;width:125.9pt;">1 - 3</td><td style="border-bottom:1.0pt solid black;border-left:none;border-right:1.0pt solid black;border-top:none;height:12.55pt;padding:0cm;vertical-align:top;width:127.65pt;">All</td><td style="border-bottom:1.0pt solid black;border-left:none;border-right:1.0pt solid black;border-top:none;height:12.55pt;padding:0cm;vertical-align:top;width:177.2pt;">Conduct an internal audit.</td><td style="border-bottom:1.0pt solid black;border-left:none;border-right:1.0pt solid black;border-top:none;height:12.55pt;padding:0cm;vertical-align:top;width:10.0cm;">&nbsp;</td></tr></tbody></table></figure><p>&nbsp;</p></dd></div>
            
        </div>
        <div class="py-3 d-flex justify-content-center" style="gap: 20px;">
            <a href="10.php"><button class="btn btn-primary">Previous</button></a>
            <a href="12.php"><button class="btn btn-success">Next</button></a>
        </div>
    </div>
    <div class="d-flex flex-column position-fixed"
        style="width: 20vw; top: 10vh; bottom: 0; right: 0; background-color: var(--bs-light);">

        <!-- Start Sidebar -->


        <?php
        include ("sidebar.php");
        ?>
        <!-- End Sidebar -->

    </div>
    <!-- Ensure jQuery is loaded first -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Then load Popper.js if you're using Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.11.9/dist/umd/popper.min.js"></script>


    <!-- Then Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="number-two.js"></script>
    <!-- Your own scripts, if any, come last -->

    </body>

    </html>