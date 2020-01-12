/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package StrukturSekuensial;
import java.util.Scanner;
/**
 *
 * @author Thomi
 */
public class StrukturSekuensial {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
    int a , t , l;
    Scanner Baca = new Scanner (System.in);
    System.out.print("Masukan Alas = "); a = Baca.nextInt ();
    System.out.print("masukan Tinggi = "); t = Baca.nextInt();
    l = ((a*t)/2);
    System.out.println("Luas Segitiga = " +l );
    
    
    
    }
    
}
