<?php

/**
 * Class SecretAgent - Simple class for creating an agent
 * @author Grant Allenby / w18013678
 */
class SecretAgent {
    private $codeName;
    private $codeWord;
    private $mission;

    /**
     * SecretAgent constructor
     * @param $codeName - Name of secret agent
     * @param $codeWord - Code word for agent
     * @param $mission - Secret mission of agent
     */
    public function __construct($codeName, $codeWord, $mission)
    {
        $this->setCodeName($codeName);
        $this->setCodeWord($codeWord);
        $this->setMission($mission);
    }

    /**
     * @param $codeName - The name to change to
     */
    public function setCodeName($codeName) {
        $this->codeName = $codeName;
    }

    /**
     * @param $codeWord - code word to change to
     */
    public function setCodeWord($codeWord) {
        $this->codeWord = $codeWord;
    }

    /**
     * @param $mission - mission to change to
     */
    public function setMission($mission) {
        $this->mission = $mission;
    }

    /**
     * @return mixed - The code name
     */
    public function getCodeName() {
        return $this->codeName;
    }

    /**
     * @return mixed - The code word
     */
    public function getCodeWord() {
        return $this->codeWord;
    }

    public function getMission() {
        return $this->mission;
    }

    /** Returns agents mission if code name is inputted correctly
     * @param $codeName - The name to check against
     * @return mixed - Mission to return if correct
     */
    public function getMissionWithCodeName($codeName) {
        if($codeName == $this->getCodeName()) {
            return "<p>Current Mission: <br>".$this->mission."</p>";
        }
        else {
            return "<p>Incorrect</p><br>";
        }
    }

    /** Returns true or false if code name is correct.
     * @param $codeName - code name to check against
     * @return bool - Returns true or false.
     */
    public function checkCodeName($codeName) {
        if($codeName == $this->getCodeName()) {
            return true;
        }
        else {
            return false;
        }
    }

    /** Sets a new mission if code name and code word are correct, as well as if mission isn't empty.
     * @param $codeWord - code word to check
     * @param $codeName - code name to check
     * @param $mission - mission to check
     * @return string - Description of change
     */
    public function setMission_codeAndName($codeName, $codeWord, $mission)
    {
        if ($this->checkCodeName($codeName) && $codeWord == $this->getCodeWord() && $mission !== "") {
            $this->setMission($mission);
            return "<p>Mission changed.<br> New Mission for Agent ".$this->getCodeName().": "
                .$this->getMission()."</p>";
        } else {
            return "<p>No change made.<br>Following were supplied:<br>Code Name: ".$codeName
                ."<br>Code Word: ".$codeWord."<br>Mission: ".$mission."</p>";
        }
    }

    /**
     * @return string - Agent details (codeName, codeWord, mission)
     */
    public function getAgentDetails() {
        return $this->getCodeName().", ".$this->getCodeWord().", ".$this->getMission();
    }

    /**
     * @return string - toString of SecretAgent.
     */
    public function __toString()
    {
        return "<p>Agent Details:<br>Code Name: ".$this->getCodeName()."<br>Code Word: ".$this->getCodeWord()
            ."<br>Mission: ".$this->getMission()."<br>";
    }
}