/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package StrukturSeleksi;
import java.util.Scanner;
import static java.lang.System.in;
import static java.lang.System.out;

/**
 *
 * @author Thomi
 */
public class StrukturSeleksi {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
    Scanner Baca = new Scanner(in);
       int Nilai;
       String hasil;
       System.out.print("Masukan Nilai Kamu = ");
       Nilai = Baca.nextInt();
       
       if (Nilai >= 90){
           hasil = "Sangat Memuaskan";
       }
       else if (Nilai >= 85){
           hasil = "Memuaskan";
       }
       else if (Nilai >= 80){
           hasil = "Cukup";
       }
       else if (Nilai >= 75){
           hasil = "Rata - Rata";
       }
       else {
           hasil = "SELAMAT ANDA MENGIKUTI REMEDIAL";
       }
       System.out.println("HASIL KALIAN = " +hasil);
       
    }
    
}