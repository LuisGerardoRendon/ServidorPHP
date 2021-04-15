<?php
namespace calculadora;

/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class calculadora_suma_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'numero1',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'numero2',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var int
     */
    public $numero1 = null;
    /**
     * @var int
     */
    public $numero2 = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['numero1'])) {
                $this->numero1 = $vals['numero1'];
            }
            if (isset($vals['numero2'])) {
                $this->numero2 = $vals['numero2'];
            }
        }
    }

    public function getName()
    {
        return 'calculadora_suma_args';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->numero1);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->numero2);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('calculadora_suma_args');
        if ($this->numero1 !== null) {
            $xfer += $output->writeFieldBegin('numero1', TType::I32, 1);
            $xfer += $output->writeI32($this->numero1);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->numero2 !== null) {
            $xfer += $output->writeFieldBegin('numero2', TType::I32, 2);
            $xfer += $output->writeI32($this->numero2);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}