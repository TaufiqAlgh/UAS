/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rekrsif;
import java.util.Scanner;
/**
 *
 * @author Thomi
 */
public class Rekrsif {

    public static int factorial (int n) {
        if (n==0)
            return 1;
        else
            return n * factorial (n - 1);
        
    } 
    public static void main(String[] args) {
     int n;
     Scanner Baca = new Scanner (System.in);
     System.out.print ("Masukan Angka = ");
     n = Baca.nextInt();
     
     System.out.println 
        ("Nilai Faktorial Dari " + n + " adalah = "+ factorial(n));
     
     
    }
    
}
