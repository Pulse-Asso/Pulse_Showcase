# Script PowerShell pour redimensionner les images c1 et c2
Add-Type -AssemblyName System.Drawing

# Charger l'image de référence (p1.png) pour obtenir les dimensions cibles
$referenceImage = [System.Drawing.Bitmap]::FromFile("p1.png")
$targetWidth = $referenceImage.Width
$targetHeight = $referenceImage.Height
Write-Host "Dimensions cibles: $targetWidth x $targetHeight"

# Fonction pour redimensionner une image
function Resize-Image {
    param(
        [string]$inputPath,
        [string]$outputPath,
        [int]$width,
        [int]$height
    )
    
    $originalImage = [System.Drawing.Bitmap]::FromFile($inputPath)
    $resizedImage = New-Object System.Drawing.Bitmap($width, $height)
    $graphics = [System.Drawing.Graphics]::FromImage($resizedImage)
    
    # Configuration pour un redimensionnement de qualité
    $graphics.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
    $graphics.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality
    $graphics.PixelOffsetMode = [System.Drawing.Drawing2D.PixelOffsetMode]::HighQuality
    
    # Redimensionner l'image
    $graphics.DrawImage($originalImage, 0, 0, $width, $height)
    
    # Sauvegarder l'image redimensionnée
    $resizedImage.Save($outputPath, [System.Drawing.Imaging.ImageFormat]::Png)
    
    # Nettoyer les ressources
    $graphics.Dispose()
    $originalImage.Dispose()
    $resizedImage.Dispose()
    
    Write-Host "Image redimensionnée: $outputPath"
}

# Redimensionner c1.png
if (Test-Path "c1.png") {
    Resize-Image -inputPath "c1.png" -outputPath "c1_resized.png" -width $targetWidth -height $targetHeight
}

# Redimensionner c2.png
if (Test-Path "c2.png") {
    Resize-Image -inputPath "c2.png" -outputPath "c2_resized.png" -width $targetWidth -height $targetHeight
}

# Nettoyer l'image de référence
$referenceImage.Dispose()

Write-Host "Redimensionnement terminé!"
