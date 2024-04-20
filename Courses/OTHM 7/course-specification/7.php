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
                <h2>Unit 2 - Learning outcomes and assessment criteria</h2>
            </div>
            <hr>

            <div class="MuiCardContent-root">
                <dd class="ck-content" style="overflow-wrap: anywhere;">
                    <h4>Health and Safety Management Practice</h4>
                    <figure class="table">
                        <table style="border-bottom:none;border-left:none;border-right:none;border-top:none;">
                            <tbody>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:12.65pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        Unit Reference Number</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:12.65pt;padding:0cm;vertical-align:top;width:552.85pt;">
                                        Y/617/8526</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Unit Title</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:552.85pt;">
                                        Health and Safety Management Practice</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Unit Level</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:552.85pt;">
                                        6</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Number of Credits</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:552.85pt;">
                                        10</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Total Qualification Time (TQT)</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:552.85pt;">
                                        100</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Guided Learning Hours (GLH)</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:552.85pt;">
                                        40</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.6pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Mandatory / Optional</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.6pt;padding:0cm;vertical-align:top;width:552.85pt;">
                                        Mandatory</td>
                                </tr>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:12.65pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <span style="color:black;">Unit Grading Structure</span></td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:12.65pt;padding:0cm;vertical-align:top;width:552.85pt;">
                                        Pass / Fail</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <h4>Unit Aims</h4>
                    <p>The aim of this unit is to provide learners with the knowledge, understanding and skills to
                        translate organisational policy into an effective occupational health and safety management
                        operation, including the planning, organising, controlling, reviewing and auditing of health and
                        safety management performance and operations, the application of corporate social responsibility
                        and ethical codes of conduct on management, and the critical factors in managing the
                        occupational health and well-being of workers.</p>
                    <h4>Learning Outcomes, Assessment Criteria and Indicative Content</h4>
                    <figure class="table">
                        <table style="border-bottom:none;border-left:none;border-right:none;border-top:none;">
                            <tbody>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.25pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        Learning Outcomes- The learner will:</td>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.25pt;padding:0cm;vertical-align:top;width:255.2pt;">
                                        <span style="color:black;">Assessment Criteria- The learner can:</span></td>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.25pt;padding:0cm;vertical-align:top;width:297.7pt;">
                                        <span style="color:black;">Indicative Content</span></td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:126.25pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        1. Understand the process of planning and organising occupational health and
                                        safety practices in the workplace.</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:126.25pt;padding:0cm;vertical-align:top;width:255.2pt;">
                                        <ol>
                                            <li>Explain the role of the board and/or senior management in the planning
                                                and organising of health and safety practices in the workplace.</li>
                                            <li>Explain the importance of the planning process to ensure changing
                                                policies, regulations and legal requirements are&nbsp;met.</li>
                                            <li>Assess the resources and skills required&nbsp;to</li>
                                        </ol>
                                        <p>plan health and safety practices in the workplace.</p>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:126.25pt;padding:0cm;vertical-align:top;width:297.7pt;">
                                        <ul>
                                            <li>Governance of change to health and safety practice, policy, statutory
                                                and legal requirements. Ensure relevant human resources, skills
                                                and&nbsp;experience.</li>
                                            <li>Communication systems, H&amp;S management&nbsp;systems. Policy review,
                                                monitoring and auditing&nbsp;practice.</li>
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
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:113.85pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        2. Understand the process of leading and controlling health and safety practices
                                        in the workplace.</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:113.85pt;padding:0cm;vertical-align:top;width:255.2pt;">
                                        <ol>
                                            <li>Explain the role of the board and/or senior management in the leading
                                                and controlling of health and safety practices in the&nbsp;workplace.
                                            </li>
                                            <li>Evaluate the use of goals and targets in health and safety management
                                                practices in the&nbsp;workplace.</li>
                                            <li>Assess the resources and skills required to lead and control health and
                                                safety practices in the&nbsp;workplace.</li>
                                        </ol>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:113.85pt;padding:0cm;vertical-align:top;width:297.7pt;">
                                        <ul>
                                            <li>Governance of health and safety practice. Maintenance of standards,
                                                systems, resources, skills. Importance of goals, targets, objectives.
                                                Assessment and regular review of resources and skills requirements.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:138.8pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        3.&nbsp; &nbsp;Understand the process of reviewing the performance of health and
                                        safety practices in the workplace.</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:138.8pt;padding:0cm;vertical-align:top;width:255.2pt;">
                                        <ol>
                                            <li>Explain the role of the board and/or senior management in reviewing the
                                                performance of health and safety practices in the&nbsp;workplace.</li>
                                            <li>Assess the resources and skills required to review health and safety
                                                practices in the workplace.</li>
                                            <li>Explain and justify the use of results and outputs from a
                                                performance&nbsp;review.</li>
                                            <li>Assess the advantages and disadvantages of proactive and reactive
                                                performance indicators.</li>
                                        </ol>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:138.8pt;padding:0cm;vertical-align:top;width:297.7pt;">
                                        <ul>
                                            <li>Formal and informal performance reviews and review systems. Data used in
                                                a review process, eg health and safety objectives, proactive performance
                                                indicators, reactive performance indicators, organisational procedures,
                                                change agents, standards, expectations. Review outputs, eg actions
                                                plans, stakeholder communication plans, senior management reports,
                                                objectives.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:128.25pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        4.&nbsp; Understand the process of monitoring and auditing&nbsp;health and
                                        safety practices in the workplace.</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:128.25pt;padding:0cm;vertical-align:top;width:255.2pt;">
                                        <ol>
                                            <li>Explain the role of the board and/or senior management in monitoring and
                                                auditing of health and safety practices in the&nbsp;workplace.</li>
                                            <li>Explain a range of health and safety monitoring&nbsp;techniques.</li>
                                            <li>Assess the resources and skills required to carry out health and
                                                safety&nbsp;audits.</li>
                                            <li>Explain the importance and use of audit outputs.</li>
                                        </ol>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:128.25pt;padding:0cm;vertical-align:top;width:297.7pt;">
                                        <ul>
                                            <li>Monitoring techniques, including collection of workplace health and
                                                sickness data, legislative and regulatory compliance checks, accidents,
                                                incidents and loss&nbsp;events.</li>
                                            <li>Types of audit, internal, external, certification, regulation, workplace
                                                inspections, safety&nbsp;sampling, safety surveys,&nbsp;etc.</li>
                                            <li>Comparison outputs against industry&nbsp;benchmarks/ standards and
                                                national/ international performance data.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:62.95pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        <p>5. Understand corporate social responsibilities and ethical codes of conduct
                                            and their impact on health</p>
                                        <p>and safety management.</p>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:62.95pt;padding:0cm;vertical-align:top;width:255.2pt;">
                                        <ol>
                                            <li>Explain the importance of having a corporate social responsibility
                                                objective on health and safety&nbsp;management.</li>
                                            <li>Outline how ethical codes of conduct are applied to health and
                                                safety&nbsp;management.</li>
                                        </ol>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:62.95pt;padding:0cm;vertical-align:top;width:297.7pt;">
                                        N/A</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <figure class="table">
                        <table style="border-bottom:none;border-left:none;border-right:none;border-top:none;">
                            <tbody>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:440.4pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        6. Understand the critical factors in the management of occupational health and
                                        well-being in the workplace.</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:440.4pt;padding:0cm;vertical-align:top;width:255.2pt;">
                                        <ol>
                                            <li>Explain the key principles of occupational health.</li>
                                            <li>Outline the features of vocational rehabilitation including the role of
                                                outside support&nbsp;agencies.</li>
                                            <li>Articulate the key aspects of the management of occupational health
                                                including legal&nbsp;considerations.</li>
                                            <li>Explain the causes, effects, identification and control of common types
                                                of mental ill-health in the&nbsp;workplace.</li>
                                            <li>Explain the causes, effects identification and control of work-related
                                                violence or aggression.</li>
                                        </ol>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:440.4pt;padding:0cm;vertical-align:top;width:297.7pt;">
                                        <ul>
                                            <li>The definition of occupational health (International
                                                Labour&nbsp;Organisation)</li>
                                            <li>The meaning of well-being (Economic and&nbsp;Social Research
                                                Council&nbsp;(ESRC))</li>
                                            <li>Occupational health hazards – chemical, physical, biological,
                                                psychosocial,&nbsp;ergonomic.</li>
                                            <li>The prevalence of work-related sickness and&nbsp;ill-health.</li>
                                            <li>Relationship between occupational health and general/public health,
                                                including management&nbsp;of epidemics.</li>
                                            <li>The bio-psychosocial model and how it relates&nbsp;to
                                                individual&nbsp;health</li>
                                            <li>Fitness to work and fitness to work&nbsp;standards</li>
                                            <li>Managing long-term and short-term sickness absence/incapacity
                                                for&nbsp;work</li>
                                            <li>Benefits of vocational rehabilitation for the employee/employer, and
                                                barriers to effective rehabilitation</li>
                                            <li>Risk assessments prior to return to work, liaison with other disciplines
                                                in assessing and managing fitness for work (existing health problems,
                                                fitness to work standards,&nbsp;discrimination)</li>
                                            <li>Agencies that can support employers and&nbsp;employees.</li>
                                            <li>The role, function and benefits of occupational health services</li>
                                            <li>Managing occupational health (the structure of an occupational health
                                                service and the competency&nbsp;of practitioners (physician, nurse,
                                                adviser,&nbsp;technician))</li>
                                            <li>Services offered (health promotion, eg, advice on work-related health,
                                                lifestyle, health assessment, eg, fitness for work,
                                                pre-placement/employment, return&nbsp;to</li>
                                        </ul>
                                        <p>work, job-related medical screening, pregnant workers, advice to management,
                                            eg, input to risk assessments, no-smoking policy, absence management etc,
                                        </p>
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
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:450.15pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        &nbsp;</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:450.15pt;padding:0cm;vertical-align:top;width:255.2pt;">
                                        &nbsp;</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:450.15pt;padding:0cm;vertical-align:top;width:297.7pt;">
                                        <p>treatment services, eg, first aid, counselling, physiotherapy, other
                                            rehabilitation services, medical and health surveillance)</p>
                                        <ul>
                                            <li>Importance of health needs assessment&nbsp;during planning
                                                of&nbsp;services.</li>
                                            <li>Importance of auditing against standards in occupational health
                                                provision&nbsp;(SEQOHS).</li>
                                            <li>The characteristics and causes of common types of mental ill-health
                                                observed within the workplace and their effects on an individual’s
                                                health and behaviour (depression,&nbsp;anxiety)</li>
                                            <li>Definition of work-related&nbsp;stress.</li>
                                            <li>The causes of work-related mental ill-health relating to organisation,
                                                job and individual (working hours, long hours, shift work, unpredictable
                                                hours, changes in working hours, workplace culture): communication,
                                                organisational structure, resources, support, working environment:
                                                space, noise, temperature, lighting, etc, - job content: work load, time
                                                pressures, boredom, etc, job role: clarity, conflict of interests, lack
                                                of control, etc, relationships: bullying and harassment, verbal/physical
                                                abuse, home-work interface: travel to/from work, childcare issues,
                                                relocation,etc.</li>
                                            <li>Common mental health problems discovered in the workplace generally
                                                known to be a combination of stressors.</li>
                                            <li>Supporting individuals with mental health problems to
                                                continue&nbsp;work.</li>
                                            <li>Assessment of work-related mental ill-health at individual and
                                                organisational level (eg, discussions, absence data, interviews,
                                                surveys, questionnaires,&nbsp;etc)</li>
                                            <li>Control measures to reduce and manage work-related stress (counselling
                                                and return to work&nbsp;policies)</li>
                                            <li>UK HSE’s stress management standards and their&nbsp;role in assessing
                                                and managing work-related&nbsp;stress</li>
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
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:447.15pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        &nbsp;</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:447.15pt;padding:0cm;vertical-align:top;width:255.2pt;">
                                        &nbsp;</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:447.15pt;padding:0cm;vertical-align:top;width:297.7pt;">
                                        <p>(demand, control, support, relationships, role, change).</p>
                                        <ul>
                                            <li>The definition of work-related violence/aggression (Workplace Violence
                                                in Services Sectors and Measures to Combat This Phenomenon, ILO Code of
                                                Practice and section 1.3 of ILO (and others) International Framework
                                                Guidelines for Addressing Workplace Violence in the HealthSector)</li>
                                            <li>The physical and psychological effects of violence&nbsp;and aggression
                                            </li>
                                            <li>The risk factors of work-related violence (people working with the
                                                public, the caring/teaching professions, working with psychiatric
                                                clients or alcohol/drug, impaired people, working alone, home visiting,
                                                handling money/valuables, inspection and enforcement duties, retail,
                                                licensed and illegal alcohol trade, cultural, ethnic and
                                                tribal&nbsp;issues).</li>
                                            <li>Risk assessment of work-related violence/aggression (ie, use of staff
                                                surveys, incident reporting and risk assessment)</li>
                                            <li>Control measures to reduce and manage work-related violence/aggression
                                                including using physical, organisational and behavioural&nbsp;controls:
                                                <ul>
                                                    <li>cash free systems, the layout of public areas&nbsp;and the
                                                        design of fixtures and&nbsp;fittings</li>
                                                    <li>the layout of public areas and design of fixtures
                                                        and&nbsp;fittings</li>
                                                    <li>the use of cameras, protective screens, and
                                                        security-coded&nbsp;doors</li>
                                                    <li>communication systems, passing on information on risks from
                                                        individual clients (violent marker flags), recording of staff
                                                        whereabouts and recognition when staff are overdue, the use of
                                                        mobile communications equipment phones, radios,&nbsp;GPS</li>
                                                </ul>
                                            </li>
                                            <li>Staff training: recognition of situations where violence could result,
                                                interpersonal skills to defuse&nbsp;aggression,</li>
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
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:37.95pt;padding:0cm;vertical-align:top;width:161.35pt;">
                                        &nbsp;</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:37.95pt;padding:0cm;vertical-align:top;width:255.2pt;">
                                        &nbsp;</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:37.95pt;padding:0cm;vertical-align:top;width:297.7pt;">
                                        the use of language and body language, guidance to staff on dealing with an
                                        incident, support for staff post- incident including training in counselling for
                                        managers.</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <p><strong>Assessment</strong></p>
                    <p>To achieve a ‘pass’ for this unit, learners must provide evidence to demonstrate that they have
                        fulfilled all the learning outcomes and meet the standards specified by all assessment criteria.
                    </p>
                    <figure class="table">
                        <table style="border-bottom:none;border-left:none;border-right:none;border-top:none;">
                            <tbody>
                                <tr>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.3pt;padding:0cm;vertical-align:top;width:125.9pt;">
                                        Learning Outcomes to be met</td>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.3pt;padding:0cm;vertical-align:top;width:127.65pt;">
                                        <span style="color:black;">Assessment criteria to be covered</span></td>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.3pt;padding:0cm;vertical-align:top;width:318.95pt;">
                                        <span style="color:black;">Type of assessment</span></td>
                                    <td
                                        style="background-color:#F1F1F1;border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt none #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt solid #A6A6A6;height:25.3pt;padding:0cm;vertical-align:top;width:141.85pt;">
                                        <span style="color:black;">Assessment parameters</span></td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:39.65pt;padding:0cm;vertical-align:top;width:125.9pt;">
                                        1 - 4</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:39.65pt;padding:0cm;vertical-align:top;width:127.65pt;">
                                        All</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:39.65pt;padding:0cm;vertical-align:top;width:318.95pt;">
                                        Management plan Performance review Audit report</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:39.65pt;padding:0cm;vertical-align:top;width:141.85pt;">
                                        2500 - 4000 words</td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:50.55pt;padding:0cm;vertical-align:top;width:125.9pt;">
                                        5</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:50.55pt;padding:0cm;vertical-align:top;width:127.65pt;">
                                        All</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:50.55pt;padding:0cm;vertical-align:top;width:318.95pt;">
                                        <p>Essay:</p>
                                        <p>How can Corporate Social Responsibility objectives and ethical codes of
                                            conduct be applied to an organisation’s health and</p>
                                        <p>safety management practice?</p>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:50.55pt;padding:0cm;vertical-align:top;width:141.85pt;">
                                        1250 - 1750 words</td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:1.0pt solid #A6A6A6;border-right:1.0pt solid #A6A6A6;border-top:1.0pt none #A6A6A6;height:25.35pt;padding:0cm;vertical-align:top;width:125.9pt;">
                                        6</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:25.35pt;padding:0cm;vertical-align:top;width:127.65pt;">
                                        All</td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:25.35pt;padding:0cm;vertical-align:top;width:318.95pt;">
                                        <p>Case study:</p>
                                        <p>Critique of a large organisation’s occupational health provision.</p>
                                    </td>
                                    <td
                                        style="border-bottom:1.0pt solid #A6A6A6;border-left:none;border-right:1.0pt solid #A6A6A6;border-top:none;height:25.35pt;padding:0cm;vertical-align:top;width:141.85pt;">
                                        1500 – 2500 words</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
        </div>
        <div class="py-3 d-flex justify-content-center" style="gap: 20px;">
            <a href="6.php"><button class="btn btn-primary">Previous</button></a>
            <a href="8.php"><button class="btn btn-success">Next</button></a>
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