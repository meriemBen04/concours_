<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static function add_user (Request $request)
    {
        $password = Hash::make($request->password);
        $admin = new User();
        $admin->nom = $request->nom;
        $admin->prenom = $request->prenom;
        $admin->date_naissance = $request->date_naissance;
        $admin->genre = $request->genre;
        $admin->email = $request->email;
        $admin->num_telephone = $request->num_telephone;
        $admin->role =$request->role;
        $admin->password = $password;
        $admin->adresse = $request->adresse;
-        $admin->save();
         $saved = $admin->save();
          return $admin;
    }
    public static function modifier_user(Request $request, $id){
        
        $admin = user::find($id);
        $password = $request->password;
       //dd($password);
      if ($password != $admin->password && $password != null){
        $password = Hash::make($request->password);

      }else{ 
        $password= $admin->password ;}
        if ($admin) {
          
            $admin->nom = $request->nom;
            $admin->prenom = $request->prenom;
            $admin->date_naissance = $request->date_naissance;
            $admin->genre = $request->genre;
            $admin->email = $request->email;
            $admin->adresse = $request->adresse;
            $admin->num_telephone = $request->num_tel;
            $admin->num_urgence = $request->num_tel_urgence;
            $admin->password = $password;
            $photo = $request->file('photo');

            self::storePhoto($request, $admin);
    
            // Sauvegarder les modifications
            $admin->save();
            return $admin; 
        } else {
            return null;
        }
    }
    public static function verifier_password($request){
        
        $id_admin = $request->id;
         $newPassword = $request->new_password;
         $admin =  User::find($id_admin);
         $oldHashedPassword = $admin->password;
     
         // Vérifier si le hachage de l'ancien mot de passe correspond au hachage du nouveau mot de passe
         if (Hash::check($newPassword, $oldHashedPassword)) {
             return response()->json(['success' => true]);
         } else {
             return response()->json(['success' => false]);
         }
     }
     public static function restorer_user($id_admin)
   {
    $admin = User::withTrashed()->find($id_admin);
    $admin->restore(); // 

    // Additional logic...
   }
   public static function modifier_profile($request,$id){
    $admin = User::find($id);
    if ($admin) {
        // Mettre à jour les attributs du admin avec les valeurs du formulaire
        $admin->nom = $request->nom;
        $admin->prenom = $request->prenom;
        $admin->date_naissance = $request->date_naissance;
        $admin->genre = $request->genre;
        $admin->email = $request->email;
        $admin->adresse = $request->adresse;
        $admin->num_telephone = $request->num_tel;
        $admin->num_urgence = $request->num_tel_urgence;
        // Sauvegarder les modifications
        $admin->save();
        return $admin; 
    } else {
        return null;
    }
}
public static function supprimer_user($id_admin)
    {
        $admin =  User::find($id_admin);
        $admin->delete();
        // code...

    }
    public  function isAdmin()
    {
        return $this->role === 'admin';
    }



}
