<?php 

namespace Site_Activ_Aqua\Entities;

class History
{
public $idHistory;
public $activity;
public $date;
public $name;
public $age;
public $phone_number;
public $mail;
public $adress;
public $level;
public $goal;
public $available;
public $comment;

public function getIdHistory()
{
    return $this->idHistory;
}

/** 
 * 
 * 
 * @return self
 */


public function setIdHistory($idHistory)
{
    $this->idHistory = $idHistory;
    return $this;
}

public function getActivity()
{
    return $this->activity;
}

/** 
 * 
 * 
 * @return self
 */


public function setActivity($activity)
{
    $this->activity = $activity;
    return $this;
}

public function getDate()
{
    return $this->date;
}

/** 
 * 
 * 
 * @return self
 */


public function setDate($date)
{
    $this->date = $date;
    return $this;
}



public function getName()
    {
        return $this->name;
    }

    /** 
     * 
     * 
     * @return self
     */

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }




public function getAge()
{
    return $this->age;
}

/** 
 * 
 * 
 * @return self
 */

public function setAge($age)
{
    $this->age = $age;
    return $this;
}

public function getPhone_Number()
{
    return $this->phone_number;
}

/** 
 * 
 * 
 * @return self
 */

public function setPhone_Number($phone_number)
{
    $this->phone_number = $phone_number;
    return $this;
}

public function getMail()
{
    return $this->mail;
}

/** 
 * 
 * 
 * @return self
 */

public function setMail($mail)
{
    $this->mail = $mail;
    return $this;
}

public function getAdress()
{
    return $this->adress;
}

/** 
 * 
 * 
 * @return self
 */

public function setAdress($adress)
{
    $this->adress = $adress;
    return $this;
}


public function getLevel()
{
    return $this->level;
}

/** 
 * 
 * 
 * @return self
 */

public function setLevel($level)
{
    $this->level = $level;
    return $this;
}

public function getGoal()
{
    return $this->goal;
}

/** 
 * 
 * 
 * @return self
 */

public function setGoal($goal)
{
    $this->goal = $goal;
    return $this;
}

public function getAvailable()
{
    return $this->available;
}

/** 
 * 
 * 
 * @return self
 */

public function setAvailable($available)
{
    $this->available = $available;
    return $this;
}

public function getComment()
{
    return $this->comment;
}

/** 
 * 
 * 
 * @return self
 */

public function setComment($comment)
{
    $this->comment = $comment;
    return $this;
}

}