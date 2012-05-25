<?php

class ParallelizeUrl extends CApplicationComponent {

    /**
     * mantains the hosts information
     * @var array
     */
    private $_hosts_data;

    /**
     * the received hosts array
     * @var array
     */
    private $_definded_hosts;

    /**
     * Gets the configuration defined host array
     * @return array
     */
    public function getHosts(){
        return $this->_definded_hosts;
    }
    /**
     * Sets the configuration defined host array
     * @return array
     */
    public function setHosts($arr){
        if ($arr==null || !is_array($arr)){
            throw new CException ("Hosts property can not be null");
        }
        if (count($arr)==0){
            throw new CException ("Hosts property must have defined one or more hosts");
        }

        $this->_definded_hosts = $arr;

        $this->_hosts_data = array();
        foreach($arr as $value){
            $this->_hosts_data[] = $value;
        }
    }

    /**
     * Used to move around the host and serve them uniformerly
     * @var int
     */
    private $_index = -1;

    /**
     * get one of the parallelized hosts
     * @return string
     */
    public function getParallelizedHost(){
        if (isset($this->_hosts_data) && is_array($this->_hosts_data)){
            $cant = count($this->_hosts_data);
            if ($cant>0){
                $this->_index = $this->_index+1>=$cant?0:$this->_index+1;
                return $this->_hosts_data[$this->_index];
            }
        }
        throw new CException(__CLASS__ . " is not set correctly");
    }
}


