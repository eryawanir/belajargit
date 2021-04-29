<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Git</title>
</head>

<body>
    <header>
        <h1>Belajar Git</h1>
    </header>
    <main>
        <section>
            <h2>Apa itu git dan github?</h2>
            <p>Mukadimah :</p>
            <ul>
                <li>git dan github dua hal yang berbeda</li>
                <li>git -> vcs (version control system) -> sistem untuk mengelola perubahan</li>
                <li>kenapa pake vcs?
                    <ul>
                        <li>biar ctrl z ctrl y nya (redo, undo) lebih canggih,
                            jadi ada timelinenya(merekam setiap perubahan)</li>
                        <li>mudahin kerja tim (kolaborasi), mirip gugel docs</li>
                    </ul>
                </li>
            </ul>
            <p>Git :</p>
            <ul>
                <li>software VCS di komputer</li>
                <li>mengelola segala perubahan file (isi file) didalam folder
                    (isi foldernya juga dikelola)</li>
                <li>folder pada git disebut dengan <b>repo/repository</b></li>
                <li>riwayat/rekaman perubahan disebut dengan <b>commit</b>
                    (mirip timeline) yang ditandai pake <b>hash</b></li>
                <li>pindah ke commit tertentu disebut <b>checkout</b></li>
                <li>pengen bikin jalur baru disebut <b>branch</b></li>
                <li>menyatukan branch disebut <b>merge</b></li>
            </ul>
            <p>GitHub :</p>
            <ul>
                <li>website vcs</li>
                <li>mirip cloud dan ada git nya</li>
                <li>dan bisa dihubungkan dengan git yang ada di komputer </li>
                <li>nyamain repo yg dikomputer dgn web github disebut <b>clone</b></li>
                <li>jadi bisa melakukan Push&pull:
                    <ul>
                        <li><b>push</b>-> kirim ke github // mengirim commit dari repo</li>
                        <li><b>pull</b>-> ngambil dari github ke komputer // mengambil commit dari repo</li>
                    </ul>
                </li>

            </ul>

        </section>

        <section>
            <h2>Bermain dengan Git</h2>
            <p>Ada tahapanya , pake git bash yaaa, blum punya? install git:</p>
            <ol>
                <li>Konfigurasi dulu: samain dengan akun github</li>
                <ul>
                    <li>git config --global user.email "you@example.com"</li>
                    <li>git config --global user.name "Nama Kamu"</li>
                </ul>
                <li>Buat repo <b>git init</b> jadi branch main/master
                    dgn cara masuk ke folder yang ingin dijadiin repo</li>
                <li>Lihat status nya <b>git status</b> , ada yang belum ditrack</li>
                <li>Simpan ke staging area </li>
                <ul>
                    <li><b>git add <i>namafile</i></b></li>
                    <li><b>git add . </b> untuk semua file yg di projek</li>
                </ul>

                <li>Silahkan lihat git status lagi kalau mau</li>
                <li>lakukan commit <b>git commit -m "pesan commit"</b></li>
                <li>kalau ada yg berubah lagi, statusnya M (Modified)</li>
                <li>jadi harus add dulu, baru commit</li>
                <li>tapi bisa langsung 22nya <b>git commit -am "pesan"</b></li>

            </ol>

            <h4>bikin graph</h4>
            <p> alias graph="git log --all --decorate --oneline --graph"</p>
            <h4>konfigurasi</h4>
            <ul>
                <li>liat config <b>git config --list</b></li>
                <li><b>git config --global/local</b> objek "..."</li>
            </ul>
            <h3>Bikin Branch</h3>
            <ol>
                <li><b>git branch namabranch</b></li>
                <li>hapus branch <b>git branch -d namabranch</b></li>
            </ol>

            <h3>Bikin Merge</h3>
            <ol>
                <li>pindah ke main</li>
                <li><b>git merge namabranch</b></li>
            </ol>

            <h3>Bikin branch dari commit</h3>
            <ol>
                <li>checkout ke commit nya</li>
                <li>buat branchnya</li>
                <li>checkout ke branch baru</li>
            </ol>

            <h2>Git Remote</h2>
            <h5>Dari Repo github</h5>
            <ul>
                <li>cara clone <b>git clone namaalamathttp</b> </li>
                <li>remote adalah repo inti</li>
                <li>cek nama remote <b>git remote</b> (tambah -v untuk lbh lengkap) biasanya origin </li>
                <li>git status akan memberitahu status update antara branch lokal dan origin</li>
                <li>jadi mungkin ada branch yg mendahului antara lokal dan origin</li>
                <li>jika branch lokal mendahului kita push <b>git push</b> supaya sama(up todate)</li>
            </ul>
            <h5>Dari repo lokal ke github</h5>
            <ul>
                <li>buat repo lokal</li>
                <li>buat repo github dgn nama sama tapi kosongan</li>
                <li>lalu <b>git remote add origin alamathttprepo</b></li>
                <li><b>git branch -M main</b></li>
                <li>dan <b>git push -u origin main</b></li>
            </ul>



        </section>


    </main>

</body>

</html>