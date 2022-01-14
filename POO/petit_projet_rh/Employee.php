<?php 
class  employee{
    private string $name;
    private string $firstN;
    private string $entry;
    private string $function;
    private int $salary;
    private string $service;

    public function __construct($name,$firstN,$entry,$function,$salary,$service) {
        $this->name=$name;
        $this->firstN=$firstN;
        $this->entry=$entry;
        $this->function=$function;
        $this->salary=$salary;
        $this->service=$service;
    }

    


    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void {
        $this->name = $name;
    }




    /**
    * @return string
    */
    public function getFirstN(): string {
        return $this->firstN;
    }

    /**
    * @param string $firstN
    */
    public function setFirstN(string $firstN): void {
        $this->firstN = $firstN;
    }




    /**
    * @return string
    */
    public function getEntry(): string {
        return $this->entry;
    }

    /**
    * @param string $entry
    */
    public function setEntry(string $entry): void {
        $this->entry = $entry;

    }



    /**
    * @return string
    */
    public function getFunction(): string {
        return $this->function;
    }

    /**
    * @param string $function
    */
    public function setFunction(string $function): void {
        $this->function = $function;

    }



    /**
    * @return int
    */
    public function getSalary(): int {
        return $this->salary;
    }

    /**
    * @param int $salary
    */
    public function setSalary(int $salary): void {
        $this->salary = $salary;

    }



    /**
    * @return string
    */
    public function getService(): string {
        return $this->service;
    }

    /**
    * @param string $service
    */
    public function setService(string $service): void {
        $this->service = $service;

    }

    static function yearsOfService($entry){
        $arrayEntry = explode('/',$entry);
        $entryDay = $arrayEntry[0];
        $entryMonth = $arrayEntry[1];
        $entryYear = $arrayEntry[2];
    
        $year_diff  = date("Y") - $entryYear;
        $month_diff = date("m") - $entryMonth;
        $day_diff   = date("d") - $entryDay;
    
        if ($day_diff < 0 && $month_diff==0) $year_diff--;
        if ($day_diff < 0 && $month_diff < 0) $year_diff--;
            echo "This person arrived " . $year_diff . " years ago";
        return $year_diff;

    }

    function getPrime($year_diff){
        $salaryPrime = $this->salary * 1.05; 
        $seniority = $year_diff * 1.02;
        $prime=$salaryPrime+$seniority;
        return $prime;
    }

    public function sendOrderPrime($prime){
        if(date('d/m')=="30/11") {
        print "Versement de la prime de ".$employee1->getPrime()." €".PHP_EOL;
        }
    }
    
    
    
}
$employee1 = new employee("Chi","Maria","24/12/2009","singer",50,"Culture");
$employee1->yearsOfService('24/12/2009');

echo $employee1->getPrime($year_diff);
