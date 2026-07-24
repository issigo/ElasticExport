<?php
class Elastic{
    private array $cfg;
    public function __construct(array $cfg){$this->cfg=$cfg;}
    public function test(): array{
        $ch=curl_init($this->cfg['url']);
        curl_setopt_array($ch,[
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_TIMEOUT=>5,
            CURLOPT_USERPWD=>$this->cfg['usuario'].':'.$this->cfg['password'],
            CURLOPT_SSL_VERIFYPEER=>false
        ]);
        $resp=curl_exec($ch);
        $err=curl_error($ch);
        $code=(int)curl_getinfo($ch,CURLINFO_HTTP_CODE);
        curl_close($ch);
        if($err){
            return ['status'=>'ERROR','message'=>$err];
        }
        return ['status'=>$code? 'OK':'SIN RESPUESTA','message'=>'HTTP '.$code,'body'=>$resp];
    }
}
