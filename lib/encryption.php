<?php
/**
 * Encryption utility for IPMI credentials
 * Uses AES-256-CBC encryption
 */

class Encryption {
  private static $key = null;
  
  /**
   * Get encryption key from config
   */
  private static function getKey() {
    if (self::$key === null) {
      if (!defined('ENCRYPTION_KEY') || empty(ENCRYPTION_KEY)) {
        throw new Exception('Encryption key not configured. Set ENCRYPTION_KEY in config.php');
      }
      self::$key = ENCRYPTION_KEY;
      
      // Ensure key is exactly 32 bytes for AES-256
      if (strlen(self::$key) < 32) {
        self::$key = str_pad(self::$key, 32, '0');
      } elseif (strlen(self::$key) > 32) {
        self::$key = substr(self::$key, 0, 32);
      }
    }
    return self::$key;
  }
  
  /**
   * Encrypt a string
   */
  public static function encrypt($plaintext) {
    if (empty($plaintext)) {
      return '';
    }
    
    $key = self::getKey();
    $iv = openssl_random_pseudo_bytes(16);
    $encrypted = openssl_encrypt($plaintext, 'AES-256-CBC', $key, 0, $iv);
    
    if ($encrypted === false) {
      throw new Exception('Encryption failed');
    }
    
    // Prepend IV to encrypted data
    return base64_encode($iv . $encrypted);
  }
  
  /**
   * Decrypt a string
   */
  public static function decrypt($encrypted) {
    if (empty($encrypted)) {
      return '';
    }
    
    $key = self::getKey();
    $data = base64_decode($encrypted, true);
    
    if ($data === false || strlen($data) < 16) {
      throw new Exception('Invalid encrypted data');
    }
    
    $iv = substr($data, 0, 16);
    $encrypted = substr($data, 16);
    
    $decrypted = openssl_decrypt($encrypted, 'AES-256-CBC', $key, 0, $iv);
    
    if ($decrypted === false) {
      throw new Exception('Decryption failed');
    }
    
    return $decrypted;
  }
}

