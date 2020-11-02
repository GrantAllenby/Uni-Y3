<?php
include("presentation/includes.php");
echo htmlHeader("Secret Agent Information","Secret Agents","assets/style.css");

/**
 * Creates agents into an array
 */
$agent[] = new SecretAgent("Wolf", "Howl", "Buy Milk");
$agent[] = new SecretAgent("Lion", "Roar", "Watch TV");
$agent[] = new SecretAgent("Octopus", "Squelch", "Clean House");
$agent[] = new SecretAgent("Eagle", "Caw", "Fix Satellite");
$agent[] = new SecretAgent("Rhino", "Charge", "Remove Ant Nest");
$agent[] = new SecretAgent("Dragon","Fire","Cook Chicken");

/**
 * echo out each agent detail
 */
echo startDiv("agentDetailContainer");
echo createH2("Agent Details");
for ($i = 0; $i < count($agent); $i++) {
    echo startDiv("Agent" . ($i + 1));
    echo createH3("Agent" . ($i + 1));
    echo "<p>" . $agent[$i]->getAgentDetails() . "</p>";
    echo endDiv();
}
echo endDiv();

/**
 * echo out each agent as toString
 */
echo startDiv("toStringAgentContainer");
echo createH2("toString Agents");
for ($i = 0; $i < count($agent); $i++) {
    echo startDiv("toStringAgent" . ($i + 1));
    echo createH3("toString Agent" . ($i + 1));
    echo $agent[$i]->__toString();
    echo endDiv();
}
echo endDiv();


/**
 * Set and echo out new missions.
 */
echo startDiv("missionChanges");
echo createH2("Mission Changes");
echo $agent[0]->setMission_codeAndName("Wolf","Howl","Drink Milk");
echo $agent[1]->setMission_codeAndName("Lion","Roar","Change Channel");
echo $agent[2]->setMission_codeAndName("Octopus","Squelch","Mess up House");
echo $agent[3]->setMission_codeAndName("Eagle", "Caw", "Fly Away");
echo $agent[4]->setMission_codeAndName("Rhino", "Charge", "Eat Ants");
echo $agent[5]->setMission_codeAndName("Dragon","Fire","Cook Everything");
echo endDiv();

/**
 * Echo out missions based on codeName.
 */
echo startDiv("codeNameMissions");
echo createH2("Code Name Missions");
echo $agent[0]->getMissionWithCodeName("Wolf");
echo $agent[1]->getMissionWithCodeName("Lion");
echo $agent[2]->getMissionWithCodeName("Octopus");
echo $agent[3]->getMissionWithCodeName("Eagle");
echo $agent[4]->getMissionWithCodeName("Rhino");
echo endDiv();
echo htmlFooter();
