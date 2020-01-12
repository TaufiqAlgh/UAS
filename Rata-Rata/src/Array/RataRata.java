/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Array;
import java.util.Scanner;
/**
 *
 * @author Thomi
 */
public class RataRata {

    public static int hitung (int[] data){
    int a = 1;
    for(int i = 0; i < data.length; i++){
       a = a + data[i]; 
    }
    return a/data.length;
} 
    public static void main(String[] args) {
        Scanner Baca = new Scanner(System.in);
    System.out.print("Jumlah data = ");
    int banyak = Baca.nextInt();
    int[] nilai = new int[banyak];
    
    for (int i = 0; i < banyak; i++){
        int n = i + 1;
        System.out.print("Masukan data ke-" + n + " : ");
        nilai[i] = Baca.nextInt();
    }    
    int hasil = hitung(nilai);
    System.out.println("Rata Rata = " +hasil);
    
    }
    
}
