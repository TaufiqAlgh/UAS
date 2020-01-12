/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package classandobject;

/**
 *
 * @author Thomi
 */

class Manusia {
    
    public static void makan (String makanan){
        
        System.out.println("Sedang makan " + makanan);
    }
    
}

public class ClassAndObject {
    
    public static void main(String[] args) {
        
        Manusia taufiq = new Manusia();
        
        String makanan = "Nasi";
        taufiq.makan(makanan);
        
    }
    
}
