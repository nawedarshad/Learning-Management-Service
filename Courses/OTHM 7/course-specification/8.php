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
                <h2>Unit 3 - Learning outcomes and assessment criteria</h2>
            </div>
            <hr>

            <div class="MuiCardContent-root">
                <dd class="ck-content" style="overflow-wrap: anywhere;">
                    <h4>Risk and Incident Management</h4>
                    <figure class="table">
                        <table style="border-bottom:none;border-left:none;border-right:none;border-top:none;">
                            <tbody>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        Unit Reference Number</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:545.75pt;">
                                        Y/617/7540</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.65pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Unit Title</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.65pt;padding:0cm;vertical-align:top;width:545.75pt;">
                                        Risk and Incident Management</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Unit Level</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:545.75pt;">
                                        6</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Number of Credits</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:545.75pt;">
                                        8</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Total Qualification Time (TQT)</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:545.75pt;">
                                        80 hours</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Guided Learning Hours (GLH)</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:545.75pt;">
                                        30 hours</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Mandatory / Optional</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:545.75pt;">
                                        Mandatory</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.7pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Unit Grading Structure</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.7pt;padding:0cm;vertical-align:top;width:545.75pt;">
                                        Pass / Fail</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <p>&nbsp;</p>
                    <h4>Unit Aims</h4>
                    <p>This aim of this unit is to enable learners to identify, address and manage risk and incidents in
                        relation to their roles as health and safety practitioners, including understanding strategies
                        to assess and evaluate risk, strategies and techniques to control risk, cause of loss events and
                        analysis of loss data, and managing incidents.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <h4>Learning Outcomes, Assessment Criteria and Indicative Content</h4>
                    <p>&nbsp;</p>
                    <figure class="table">
                        <table style="border-bottom:none;border-left:none;border-right:none;border-top:none;">
                            <tbody>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.3pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        Learning Outcomes- The learner will:</td>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.3pt;padding:0cm;vertical-align:top;width:262.25pt;">
                                        <span style="color:black;">Assessment Criteria- The learner can:</span></td>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.3pt;padding:0cm;vertical-align:top;width:10.0cm;">
                                        <span style="color:black;">Indicative Content</span></td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:126.95pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        1.&nbsp;&nbsp;&nbsp; Understand the processes and strategies for identifying
                                        hazards and evaluating risk levels when carrying out risk assessments in an
                                        organisation.</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:126.95pt;padding:0cm;vertical-align:top;width:262.25pt;">
                                        <ol>
                                            <li>Outline sources of information to identify hazards and
                                                assess&nbsp;risks.</li>
                                            <li>Explain techniques to identify&nbsp;hazards.</li>
                                            <li>Explain how to implement a risk assessment system and to
                                                evaluate&nbsp;risk.</li>
                                            <li>Explain how to measure, monitor and report hazards.</li>
                                            <li>Explain how to maintain records of risks assessment to meet regularly
                                                and&nbsp;statutory</li>
                                        </ol>
                                        <p>requirements.</p>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:126.95pt;padding:0cm;vertical-align:top;width:10.0cm;">
                                        <ul>
                                            <li>Sources of information to identify hazards and assess risk, external
                                                information sources: governmental agencies (OSHA/HSE), European Safety
                                                Agency, International Labour Organisation (ILO), World Health
                                                Organisation (WHO), professional and trade bodies, internal information
                                                sources: damage, injury and sickness data, near- miss information and
                                                maintenance records.&nbsp;The</li>
                                        </ul>
                                        <p>validity and usefulness of using external and internal information sources.
                                            Use of observation,</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <figure class="table">
                        <table style="border-bottom:none;border-left:none;border-right:none;border-top:none;">
                            <tbody>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:114.55pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        &nbsp;</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:114.55pt;padding:0cm;vertical-align:top;width:262.25pt;">
                                        1.6 Explain how to use calculations in the analysis and improvement of systems
                                        reliability and failure tracing.</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:114.55pt;padding:0cm;vertical-align:top;width:10.0cm;">
                                        <p>task analysis and failure tracing, eg hazard and operability studies,
                                            engagement of employees.</p>
                                        <ul>
                                            <li>ISO Risk Management Framework 31000, ISO Risk Control Measures- ISO
                                                45001, Risk assessment methodologies and their limitations, types of
                                                health and safety incidents, techniques and methodologies to address
                                                incidents, statutory and&nbsp;regulatory</li>
                                        </ul>
                                        <p>requirements to address risks and incidents, record management</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:233.25pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        2.&nbsp;&nbsp;&nbsp; Understand the strategies and techniques of risk control.
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:233.25pt;padding:0cm;vertical-align:top;width:262.25pt;">
                                        <ol>
                                            <li>Evaluate the use of common risk management&nbsp;strategies.</li>
                                            <li>Justify when to use risk avoidance, risk reduction, risk transfer, risk
                                                analysis, risk evaluation and risk review&nbsp;strategies.</li>
                                            <li>Explain the development and characteristics of safe systems of work and
                                                safe operating procedures.</li>
                                        </ol>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:233.25pt;padding:0cm;vertical-align:top;width:10.0cm;">
                                        <ul>
                                            <li>Risk assessment process: identify of risks/hazards, identify those at
                                                risk, evaluate likelihood and severity, identify risk control standards,
                                                create action plan, prioritise actions, record assessment. Generic,
                                                specific and dynamic risk assessments, when to use, when not to,
                                                consideration of long- term hazards to health. Differences between
                                                qualitative, semi-quantitative and quantitative assessments,
                                                implementation of effective risk assessment system: procedures,
                                                recording protocols, training, skills, responsibilities, authorisation,
                                                monitoring actions, review, characteristics of safe systems of work and
                                                safe operating procedures, when to use a variety of risk strategies:
                                                avoidance, reduction, transfer,&nbsp;analysis,</li>
                                        </ul>
                                        <p>evaluation and review.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:101.15pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        3.&nbsp;&nbsp;&nbsp; Understand the models of loss causation, analysis of loss
                                        data and the importance of incident investigation.</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:101.15pt;padding:0cm;vertical-align:top;width:262.25pt;">
                                        <ol>
                                            <li>Outline a range of loss causation theories and techniques.</li>
                                            <li>Justify the use of quantitative methods in analysing loss&nbsp;data.
                                            </li>
                                            <li>Assess the needs and impacts of reporting of loss&nbsp;events.</li>
                                            <li>Explain the importance and impact of incident investigations.</li>
                                        </ol>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:101.15pt;padding:0cm;vertical-align:top;width:10.0cm;">
                                        <p>Loss causation theories and techniques:</p>
                                        <ul>
                                            <li>Benefits/limitations of accident/incident ratio studies</li>
                                            <li>Birds domino and multi-causality theories (immediate, underlying and
                                                root&nbsp;causes)</li>
                                            <li>Reason’s model of accident causation (swiss Cheese Model), fault tree,
                                                event tree and the Bowtie&nbsp;model</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <figure class="table">
                        <table style="border-bottom:none;border-left:none;border-right:none;border-top:none;">
                            <tbody>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:151.75pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        &nbsp;</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:151.75pt;padding:0cm;vertical-align:top;width:262.25pt;">
                                        &nbsp;</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:151.75pt;padding:0cm;vertical-align:top;width:10.0cm;">
                                        <ul>
                                            <li>Behavioural root cause&nbsp;analysis.</li>
                                        </ul>
                                        <p>Quantitative methods of calculating loss rates from raw data:</p>
                                        <ul>
                                            <li>Accident/incident frequency rate, accident incidence rate,&nbsp;accident
                                            </li>
                                            <li>severity rate, ill-health prevalence&nbsp;rate</li>
                                            <li>Interpretation of loss event data in graphical and numerical format, eg
                                                histograms, pie charts and line&nbsp;graphs</li>
                                            <li>Statistical variability, validity and the use of distributions (ie,
                                                importance of representative samples, sampling a population,
                                                data&nbsp;errors).</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:204.3pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        4.&nbsp;&nbsp;&nbsp; Understand processes and strategies to manage&nbsp;health
                                        and safety incidents in an organisation.</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:204.3pt;padding:0cm;vertical-align:top;width:262.25pt;">
                                        <ol>
                                            <li>Outline the critical stages for managing incidents in
                                                the&nbsp;organisation.</li>
                                            <li>Outline organisational policies to identify, investigate, report and
                                                record&nbsp;incidents.</li>
                                            <li>Explain how to maintain records of incidents to meet regularly and
                                                statutory&nbsp;requirements.</li>
                                            <li>Evaluate an organisational process for managing health and
                                                safety&nbsp;incidents.</li>
                                        </ol>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:204.3pt;padding:0cm;vertical-align:top;width:10.0cm;">
                                        <ul>
                                            <li>Reporting practices: the ILO Code of Practice, Recording and
                                                Notification of Occupational Accidents and Diseases (1996), critical
                                                importance of internal reporting and recording&nbsp;systems.</li>
                                            <li>Importance of investigating incidents: legal requirements, data
                                                gathering, root cause analysis, prevention of recurrence, staffmorale
                                            </li>
                                            <li>‘Investigating accidents and incidents – a workbook for employers,
                                                unions, safety representatives and safety professionals (HSG245)’
                                                stages: preserve the scene, note people and equipment involved, report
                                                event, decide if further investigation needed, gather information,
                                                analyse information, identify control measures, produce and implement
                                                anaction</li>
                                        </ul>
                                        <p>plan, share information and lessons learned to prevent recurrence.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <p><strong>Assessment</strong></p>
                    <p>To achieve a ‘pass’ for this unit, learners must provide evidence to demonstrate that they have
                        fulfilled all the learning outcomes and meet the standards specified by all assessment criteria.
                    </p>
                    <p>&nbsp;</p>
                    <figure class="table">
                        <table style="border-bottom:none;border-left:none;border-right:none;border-top:none;">
                            <tbody>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.25pt;padding:0cm;vertical-align:top;width:125.9pt;">
                                        Learning Outcomes to be met</td>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.25pt;padding:0cm;vertical-align:top;width:127.65pt;">
                                        <span style="color:black;">Assessment criteria to be covered</span></td>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.25pt;padding:0cm;vertical-align:top;width:155.9pt;">
                                        <span style="color:black;">Type of assessment</span></td>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.25pt;padding:0cm;vertical-align:top;width:297.75pt;">
                                        <span style="color:black;">Assessment parameters</span></td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:37.7pt;padding:0cm;vertical-align:top;width:125.9pt;">
                                        1 - 4</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:37.7pt;padding:0cm;vertical-align:top;width:127.65pt;">
                                        All</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:37.7pt;padding:0cm;vertical-align:top;width:155.9pt;">
                                        Essay(s)</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:37.7pt;padding:0cm;vertical-align:top;width:297.75pt;">
                                        <p>One or more essays to describe a variety of risk</p>
                                        <p>assessment methodologies, with real examples of practice Approximately 2500 –
                                            3500 words</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                </dd>
            </div>
        </div>
        <div class="py-3 d-flex justify-content-center" style="gap: 20px;">
            <a href="7.php"><button class="btn btn-primary">Previous</button></a>
            <a href="9.php"><button class="btn btn-success">Next</button></a>
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